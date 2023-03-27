<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceIntro;

class ServiceController extends Controller
{
    //
    //
    public function ServiceCreate(){
        return view('admin.service.create_service');
    }//end function

    public function ServiceStore(Request $request){
        //dd($request->toArray());

        $request->validate([  

            'service_name' => "required|unique:services",  
            'service_icon' => "required|unique:services", 
            'service_image' => 'required',
            'service_details' => 'required',

        ],
        [

            'service_name.unique' => 'Please do not insert existing service name',
            'service_icon.unique' => 'You have already use this icon for other service',
            'service_image.required' => 'Service Image require',
            'service_details.required' => 'Service Details require',
        
        ]
      );

      $data = new Service();

      $data->service_name = $request->service_name;
      $data->service_icon = $request->service_icon;
      $data->service_details = $request->service_details;

      if($request->file('service_image')){
        $files = $request->file('service_image');            
        $destinationPath = public_path('upload/service_images/');
        $fileName = date('YmdHis').$files->getClientOriginalExtension();
        $files->move($destinationPath,$fileName);
        $data->service_image = $fileName;        
       }

       $data->save();

       return redirect()->route('service.view')->with('success',"New Service created successfully");



    }//end function

    public function ServiceView(){
        $allData = Service::all();
        return view('admin.service.list_service',compact('allData'));
    }//end function

    public function ServiceEdit($id){
        $editData = Service::find($id);
        return  view('admin.service.edit_service',compact('editData'));
    }//end function

    public function ServiceUpdate(Request $request,$id){

       // dd($request->toArray());
        

        $request->validate([  

            'service_name' => "required|unique:services,service_name,$id", 
            'service_icon' => "required|unique:services,service_icon,$id",                          
            'service_details' => 'required',

        ],
        [

            'service_name.unique' => 'Please do not insert existing service name', 
            'service_icon.unique' => 'You have already use this icon for other service',           
            'service_details.required' => 'Service Details require',
        
        ]
      );

      $data = Service::find($id);
      //dd($data->toArray());
      $data->service_name = $request->service_name;
      $data->service_icon = $request->service_icon;
      $data->service_details = $request->service_details;

      if($request->file('service_image')){
        $files = $request->file('service_image');   
        @unlink(public_path('upload/service_images/'.$data->service_image));            
        $destinationPath = public_path('upload/service_images/');
        $fileName = date('YmdHis').$files->getClientOriginalExtension();
        $files->move($destinationPath,$fileName);
        $data->service_image = $fileName;        
       }

       $data->save();

       return redirect()->route('service.view')->with('success',"Service data Updated successfully");



    }//end function

    public function ServiceDelete($id){
        Service::find($id)->delete();
        return redirect()->back()->with('error',"Service deleted successfully");
    }//end function


    //===============service intro===========================================

    public function ServiceIntroView(){
        $allData = ServiceIntro::all();
        return view('admin.service.serviceintro_list',compact('allData'));
    }//end function

    public function ServiceIntroCreate(){
        return view('admin.service.create_serviceintro');
    }//end function

    public function ServiceIntroStore(Request $request){

        //dd($request->toArray());
        $request->validate([  

            'heading' => "required",  
            'detail' => "required",             
        ]
      );

      $data = new ServiceIntro();

      $data->heading = $request->heading;      
      $data->detail = $request->detail;

      $data->save();

      return redirect()->route('service.intro.view')->with('success',"Service Intro data Created successfully");
    }//end function


    public function ServiceIntroEdit($id){
        $editData = ServiceIntro::find($id);
        return view('admin.service.edit_serviceintro',compact('editData'));
    }//end function

    public function ServiceIntroUpdate(Request $request,$id){
        $request->validate([  

            'heading' => "required",  
            'detail' => "required",             
        ]
      );

      $data = ServiceIntro::find($id);

      $data->heading = $request->heading;      
      $data->detail = $request->detail;

      $data->save();

      return redirect()->route('service.intro.view')->with('success',"Service Intro Updated  successfully");
    }//end function

    public function ServiceIntroDelete($id){
        ServiceIntro::find($id)->delete();
        return redirect()->back()->with('success',"Service Intro Deleted  successfully");
    }//end function
}
