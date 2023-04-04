<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Mews\Captcha;
use Laravel\Fortify\Features;

class UserController extends Controller
{
    public function registerView(){
        return view('pages.signup');
    }//end function

    public function loginView(){
        echo "I am here";
        return view('auth.login_y');
    }//end function

    public function storeUser(Request $request){
        //dd($request->toArray());

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'same:password',
            //'captcha' => 'required|captcha',
        ]);

        //dd($validated);

       

        $data = new User();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = hash::make($request->password);

        $data->save();

        if(Features::emailVerification()){
            return redirect()->route('verification.notice')->with('warning',"Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.");
        }

        

        //$flag =  $data->save();
        // if($data->save()){
        // return redirect()->route('verification.notice')->with('warning',"Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.");
        // } else {
        //     return redirect()->back()->with('error','something wrong');
        // }
        
    }//end function

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
        //return response()->json(['captcha'=> Captcha::img()]);
    }

    public function profileComplete(){
        return view('pages.profile_complete');
    }

    // public function UserLogout(){

    // }

    public function PasswordReset(Request $request){

        //dd($request->toArray());

        //this rule is use for current password match
        $request->validate([
                //'current_password' => ['required', 'string', 'current_password:web'],
                'current_password' =>  'required',
                'password'=> 'required',
                'confirm_password' => 'same:password',

            ]

        );
        $hashedPassword = Auth::user()->password;

        if(Hash::check($request->current_password,$hashedPassword)){
            $user =  User::find(Auth::id());
            $user->password = hash::make($request->password);
        }

        //dd($user);

        $user->save();

        return redirect()->route('login')->with('success',"User Password change successfully");


    }//end function


    public function ProfileStore(Request $request){
          //dd($request->toArray());
          $id = Auth::user()->id;
          //dd($id);
  
           $request->validate([
  
              'name' => 'required',
              'email' => "required|email|unique:users,email,$id",
              'phone' => 'required|min:11|numeric',
              'address' => 'required',
  
          ]);
  
          $user =User::find($id);
  
          //dd($user->toArray());
  
          $user->name = $request->name;
          $user->about = $request->about;
          $user->company = $request->company; 
          $user->website = $request->website;                   
          $user->address = $request->address;
          $user->phone = $request->phone;
          $user->email = $request->email;
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
  
          return redirect()->back()->with('success',"User Profile updated successfully");
    }//end function


}
