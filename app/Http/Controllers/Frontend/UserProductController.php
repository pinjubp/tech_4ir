<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Product;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserProductController extends Controller
{
    //
    public function ProductUpload(){
        $data['category'] = Category::all();
        $data['subcategory'] = SubCategory::all();
        $data['brand'] = Brand::all();
        return view('pages.product.upload_product',$data);
    }//end function

    public function UserGetSubcategory($id){
        //dd($id);

        $subcategory = SubCategory::where('category_id',$id)->get();
       
        return json_encode($subcategory);
    }//end function

    public function UserProductStore(Request $request){
        //dd($request->toArray());

        $data = new Product();

        $data->product_name = $request->product_name;
        $data->product_code = $request->product_code;

        $data->category_id = $request->category_id;
        $data->subcategory_id = $request->subcategory_id;
        $data->brand_id = $request->brand_id;
       
        $data->user_id = Auth::user()->id;


        $data->selling_price = $request->selling_price;

        $data->product_details = $request->product_details;
        $data->video_link = $request->video_link;
        $data->main_slider = $request->main_slider;
      

        $data->mid_slider = $request->mid_slider;
        $data->status = 0;
        $image_one = $request->image_one;
        $image_two = $request->image_two;
        $image_three = $request->image_three;


        if($image_one && $image_two && $image_three){
            $image_one_name = hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
             Image::make($image_one)->resize(500,500)->save('public/media/product/'.$image_one_name);
             $data->image_one = 'public/media/product/'.$image_one_name;

             $image_two_name = hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
             Image::make($image_two)->resize(500,500)->save('public/media/product/'.$image_two_name);
             $data->image_two = 'public/media/product/'.$image_two_name;

             $image_three_name = hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
             Image::make($image_three)->resize(500,500)->save('public/media/product/'.$image_three_name);
             $data->image_three = 'public/media/product/'.$image_three_name;
        }
        //dd($data->toArray());
        $data->save();

       
            return Redirect()->route('user.product.detail',$data->id)->with('success', 'Product inserted successfully');


    }//end function

    public function UserProductDetail($id){
        $data['product'] =Product::find($id);
        //dd($data['product']->subcategory_id);
        //$data['user'] = User::where('id',$data['product']->user_id)->first();
        $data['category'] = Category::where('id',$data['product']->category_id)->first();   
        //if(!($data['product']->subcategory_id == null)){
            $data['subcategory']  = SubCategory::where('id',$data['product']->subcategory_id)->first();
        //}
        $data['brand'] = Brand::where('id',$data['product']->brand_id)->first();  
        
        return view('pages.product.detail_userproduct',$data);
    
       }

}
