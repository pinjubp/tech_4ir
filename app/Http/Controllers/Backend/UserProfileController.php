<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserProfileController extends Controller
{
    //
    public function ViewUserList(){
        $allData = User::all();
        return view('admin.userprofile.list_user',compact('allData'));
    }//end function


    public function IntroToggle($id){       
        $data =User::find($id);
        if($data->status == 1){
            User::where('id',$id)->update(['status'=> 0]);
           $status = 0;
           return response()->json($status);

        }else{
            User::where('id',$id)->update(['status'=> 1]);
           $status = 1;
           return response()->json($status);
        }

   }//end functions

   function UserEdit($id){

            $user = User::find($id);
            //$user= User::find($id);
        //dd($user->toArray());
        

            return view('admin.userprofile.edit_user',compact('user'));
        
    }//end function

    function DetailUser($id){

        $user = User::find($id);
        //$user= User::find($id);
    //dd($user->toArray());
    

        return view('admin.userprofile.detail_user',compact('user'));
    
}//end function


function UpdateUser(Request $request,$id){
    //dd($request->toArray());
    //$id = Auth::user()->id;
    //dd($id);

     $request->validate([

        'name' => 'required',
        'email' => "required|email|unique:users,email,$id",
        'phone' => 'required|min:11|numeric',

    ]);

    $user = User::find($id);



    $user->name = $request->name;
    $user->email = $request->email;
    $user->about = $request->about;
    $user->company = $request->company;
    $user->website = $request->website;
    $user->date_of_birth = $request->date_of_birth;
    $user->address = $request->address;
    $user->phone = $request->phone;    
    $user->twitter_profile = $request->twitter_profile;
    $user->facebook_profile = $request->facebook_profile;
    $user->youtube_profile = $request->youtube_profile;
    $user->linkedin_profile = $request->linkedin_profile;

   



    if($request->file('image')){
        $files = $request->file('image');
        @unlink(public_path('upload/user_images/'.$user->image));
        $destinationPath = public_path('upload/user_images/');
        $fileName = date('YmdHis').$files->getClientOriginalExtension();
        $files->move($destinationPath,$fileName);
        $user->image = $fileName;

    }

    $user->save();

    return redirect()->route('view.userlist')->with('success',"User Profile updated successfully");

}//end function


public function DeleteUser($id){

    $user= User::find($id);
    //dd($user->toArray());
    
         $user->delete();
         return redirect()->back()->with('success',"User Profile deleted successfully");
    

 }//end function


    


}
