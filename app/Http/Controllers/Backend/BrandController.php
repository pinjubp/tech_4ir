<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function AddBrand(){
        return view('admin.brand.add_brand');
    }//end function


    public function StoreBrand(Request $request){
        //dd($request->toArray());
        $validateData = $request->validate([
            'brand_name' => 'required|unique:brands|max:255',
        ]);
        $data = new Brand();
        $data->brand_name = strtoupper($request->brand_name);
        $image = $request->file('brand_image');

        

        if($request->file('brand_image')){
            $files = $request->file('brand_image');
           // @unlink(public_path('upload/band_images/'.$data->image));
            $destinationPath = public_path('upload/brand_images/');
            $fileName = date('YmdHis').$files->getClientOriginalExtension();
            $files->move($destinationPath,$fileName);
            $data->brand_image = $fileName;
    
        }
        //dd($data->toArray());
        $data->save();
        
        
            return Redirect()->route('brand.list')->with('success','brand inserted successfully'); 
    }//end function


    public function ListBrand(){
        $brand = Brand::all();
        return view('admin.brand.list_brand',compact('brand'));
    }//end function

    public function EditBrand($id){
        $editdata = Brand::find($id);
        return view('admin.brand.edit_brand',compact('editdata'));
    }//end function


    public function UpdateBrand(Request $request,$id){
        //dd($request->toArray());
        $validateData = $request->validate([
            'brand_name' => "required|max:255|unique:brands,brand_name,$id",
        ]);
        $updatedata = Brand::find($id);
        $updatedata->brand_name = strtoupper($request->brand_name);
        $image = $request->file('brand_image');

        

        if($request->file('brand_image')){
            $files = $request->file('brand_image');
            @unlink(public_path('upload/band_images/'.$updatedata->image));
            $destinationPath = public_path('upload/brand_images/');
            $fileName = date('YmdHis').$files->getClientOriginalExtension();
            $files->move($destinationPath,$fileName);
            $updatedata->brand_image = $fileName;
    
        }
        //dd($updatedata->toArray());
        $updatedata->save();
        
        
            return Redirect()->route('brand.list')->with('success','brand inserted successfully'); 
    }//end function


    public function DeleteBrand($id){

        Brand::find($id)->delete();

        return Redirect()->back()->with('error','Brand deleted successfully'); 

    }//end function


}
