<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminController extends Controller
{
    
    
    public function LoginForm(){
        return view('admin.login');
    }

    public function LoginStore(Request $request){

        //dd($request->all());
        $check = $request->all();
        if(Auth::guard('admin')->attempt(
            [
            'email' => $check['email'],
            'password' => $check['password']
             ]
             )){
            return redirect()->route('admin.dashboard')->with('success','You are Successfully Login');
        }else{
            return back()->with('error','Invalid email or password');
        }
    }//endfuntion

    public function Logout(){

        Auth::guard('admin')->logout();

        return redirect()->route('login.form')->with('success','you are successfully logout');
    }//end function

    public function Dashboard(){
        //dd(Auth::guard('admin')->id());

        return view('admin.index');
    }//end function


    public function AdminProfile(){        
        $id = Auth::guard('admin')->user()->id;
        //dd($id);
        $admin = Admin::find($id);
        //dd($admin->toArray());
        return view('admin.profile.admin_profile',compact('admin'));
    }//end function


    public function adminPasswordReset(Request $request){

        //dd($request->toArray());

        $id = Auth::guard('admin')->user()->id;

        
        $request->validate([            
                'current_password' => "required",                
                'password'=> 'required',
                'confirm_password' => 'same:password',

            ]

        );

        $hashedPassword = Auth::guard('admin')->user()->password;

        if(Hash::check($request->current_password,$hashedPassword)){

            $user =  Admin::find(Auth::guard('admin')->user()->id);    
            $user->password = hash::make($request->password);
        }else{
            return redirect()->back()->with('error',"current password not correct");
        }

        $user->save();

        return redirect()->route('login.form')->with('success',"User Password change successfully");


    }//end function

    public function ProfileStore(Request $request){

        //dd($request->toArray());

        $id = Auth::guard('admin')->user()->id;

        $request->validate([

            'name' => 'required',
            'email' => "required|email|unique:users,email,$id",
            
        ]);

        $admin =Admin::find($id);

        $admin->name = $request->name;
        $admin->email = $request->email;


        if($request->file('image')){
            $files = $request->file('image');
            @unlink(public_path('upload/user_images/'.$admin->image));
            $destinationPath = public_path('upload/user_images/');
            $fileName = date('YmdHis').$files->getClientOriginalExtension();
            $files->move($destinationPath,$fileName);
            $admin->image = $fileName;

        }

        $admin->save();

        return redirect()->back()->with('success',"User Profile updated successfully");

    }//end function

    public function CreateAdminuser(){

        return view('admin.profile.create_adminuser');
    }//end function


    

    public function StoreAdminuser(Request $request){
        //dd($request->toArray());


           $request->validate([
               'name'=> 'required',
               'password'=> 'required',
               'confirm_password' => 'same:password',
               'email' => 'required|unique:users',
               'usertype'=> 'required',

           ],
           [
               'confirm_password.same' => 'Confirm Password not Match with Password.',

           ]
       );

       $user = new Admin();



       $user->name =  $request->name;
       $user->password =  hash::make($request->password);;
       $user->email =  $request->email;
       $user->usertype = $request->usertype;

      
       if($request->file('image')){
           $files = $request->file('image');
           $destinationPath = public_path('upload/admin_images/');
           $fileName = date('YmdHis').$files->getClientOriginalExtension();
           $files->move($destinationPath,$fileName);
           $user->image = $fileName;
       }
       //dd($user->toArray());

       $user->save();

       return redirect()->route('view.adminuser')->with('success',"New User created successfully");

   }//end function


public function ViewAdminuser(){
    //$allData=Admin::all();

    // whereNotIn for admin .here admin id is 1
    $allData = Admin::whereNotIn('id', [1] )->get();

// dd($allData->toArray());
    return view('admin.profile.list_adminuser',compact('allData'));

}//end function


function EditAdminuser($id){

    $user = Admin::find($id);
    //$user= User::find($id);
   //dd($user->toArray());
   if($user->usertype == 'admin'){
         return redirect()->back()->with('warning',"Opps!! Admin User.");
   }else{

    return view('admin.profile.edit_adminuser',compact('user'));
   }
}//end function


function UpdateAdminuser(Request $request,$id){
    //dd($request->toArray());
    //$id = Auth::user()->id;
    //dd($id);

     $request->validate([

        'name' => 'required',
        'email' => "required|email|unique:admins,email,$id",
        'usertype'=> 'required',
        

    ]);

    $user = Admin::find($id);

    

    $user->name = $request->name;
    $user->usertype = $request->usertype;

   
    if($request->file('image')){
        $files = $request->file('image');
        @unlink(public_path('upload/admin_images/'.$user->image));
        $destinationPath = public_path('upload/admin_images/');
        $fileName = date('YmdHis').$files->getClientOriginalExtension();
        $files->move($destinationPath,$fileName);
        $user->image = $fileName;

    }

    //dd($user->toArray());
    $user->save();


    return redirect()->route('view.adminuser')->with('success',"User Profile updated successfully");

}//end function

public function DeleteAdminuser($id){

    $user= Admin::find($id);
    //dd($user->toArray());
    if($user->usertype == 'admin'){
          return redirect()->back()->with('warning',"Opps!! Admin User.");
    }else{
         $user->delete();
         return redirect()->back()->with('success',"User Profile deleted successfully");
    }

 }//end function


    
}
