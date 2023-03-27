<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Intro;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

class IntoController extends Controller
{
    public function CreateIntro(){

        //$allroute = Route::getRoutes();
        //dd($allroute);

        $product = Product::all();


        //return view('admin.intro.create_intro',compact('allroute'));
        return view('admin.intro.create_intro',compact('product'));
    }//end function

    public function IntroStore(Request $request){
          //dd($request->toArray());
        

         $request->validate([  

            'introduction' => "required", 
            'intro_details' => "required",                          
            'banner' => 'required',

        ],
        [

            'introduction.required' => 'Please insert the Introduction', 
            'intro_details.required' => 'Please insert introduction details',           
            'banner.required' => 'please insert banner image',
        
        ]
      );


      $data = new Intro();

      $data->introduction = $request->introduction;
      $data->intro_details = $request->intro_details;
      $data->link = $request->link;

      if($request->file('banner')){
        $files = $request->file('banner');            
        $destinationPath = public_path('upload/intro_img/');
        $fileName = date('YmdHis').$files->getClientOriginalExtension();
        $files->move($destinationPath,$fileName);
        $data->banner = $fileName;        
       }

       $data->save();

       return redirect()->route('view.intro')->with('success',"New Introduction created successfully");
    }//end function

    public function IntroView(){


       $allData = Intro::all();

       //dd($allData->toArray());
       
        return view('admin.intro.list_intro',compact('allData'));
    }//end function

    public function IntroEdit($id){
        $editData = Intro::find($id);
        //$allroute = Route::getRoutes();
        $product = Product::all();
        $editproduct = Product::find($editData->link);
        //dd($product->toArray());
        return view('admin.intro.edit_intro',compact('editData','product'));
    }//end function

    public function IntroUpdate(Request $request,$id){
          //dd($request->toArray());
        

          $request->validate([  

            'introduction' => "required", 
            'intro_details' => "required",                          
            
        ],
        [

            'introduction.required' => 'Please insert the Introduction', 
            'intro_details.required' => 'Please insert introduction details',                       
        
        ]
      );


      $data = Intro::find($id);

      $data->introduction = $request->introduction;
      $data->intro_details = $request->intro_details;
      $data->link = $request->link;

      if($request->file('banner')){
        $files = $request->file('banner');   
        @unlink(public_path('upload/intro_img/'.$data->banner));            
        $destinationPath = public_path('upload/intro_img/');
        $fileName = date('YmdHis').$files->getClientOriginalExtension();
        $files->move($destinationPath,$fileName);
        $data->banner = $fileName;        
       }

       $data->save();

       return redirect()->route('view.intro')->with('success',"Introduction Updated successfully");
    }//end function

    public function IntroDelete($id){
        Intro::find($id)->delete();
        return redirect()->back()->with('error',"Introduction deleted successfully");
    }//end function

    public function IntroActive($id){
        //dd($id);
        
        Intro::where('id',$id)->update(['status'=> 1]);
        return redirect()->back()->with('success',"Activeted the intro section successfully");
        
        
    }//end functions
    public function IntroInactive($id){
        Intro::where('id',$id)->update(['status'=> 0]);
        return redirect()->back()->with('success',"Inactiveted the intro section successfully");
    }//end functions

    public function IntroToggle($id){       
         $data =Intro::find($id);
         if($data->status == 1){
            Intro::where('id',$id)->update(['status'=> 0]);
            $status = 0;
            return response()->json($status);

         }else{
            Intro::where('id',$id)->update(['status'=> 1]);
            $status = 1;
            return response()->json($status);
         }

    }//end functions
}
