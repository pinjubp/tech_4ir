<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Description;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserProductController extends Controller
{
    /**
     * prevent user  accessing from uploading product 
     * editing product etc....
    */

    public function __construct(){
        $this->middleware('userStatus');       
    }
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
        
    
       }//end function

       public function ProductList(){
        
            $product =   Product::where('user_id',Auth::user()->id )->get();
            
            // dd($product->toArray());

            return view('pages.product.list_userproduct',compact('product'));
        
        

       }//end function

       public function UserProductEdit($id){
         
        $data['product'] =Product::find($id);    
        $data['category'] = Category::all();   
        $data['subcategory']  = SubCategory::where('category_id',$data['product']->category_id)->get();
        $data['brand'] = Brand::all();
        //dd($data['product']->toArray()); 
        return view('pages.product.edit_userproduct',$data);
        
       }//end function

       public function UserProductUpdate(Request $request,$id){
       
        $data =Product::find($id);

        $data->product_name = $request->product_name;
        $data->product_code = $request->product_code;
    
        $data->category_id = $request->category_id;
        $data->subcategory_id = $request->subcategory_id;
        $data->brand_id = $request->brand_id;
        
        $data->selling_price = $request->selling_price;
    
        $data->product_details = $request->product_details;
        $data->video_link = $request->video_link;
        $data->main_slider = $request->main_slider;
      
    
        $data->mid_slider = $request->mid_slider;
       
        $image_one = $request->image_one;
        $image_two = $request->image_two;
        $image_three = $request->image_three;
    
    
        
          //image=====imageone=======================
          if($image_one){
            if(file_exists($request->image_one)){
                 @unlink($data->image_one);
            }
            $image_one_name = hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
             Image::make($image_one)->resize(500,500)->save('public/media/product/'.$image_one_name);
             $data->image_one = 'public/media/product/'.$image_one_name;
        }
        //image=====imagetwo=======================
    
        if($image_two){
            if(file_exists($request->image_two)){
                 @unlink($data->image_two);
            }
            $image_two_name = hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
            Image::make($image_two)->resize(500,500)->save('public/media/product/'.$image_two_name);
            $data->image_two = 'public/media/product/'.$image_two_name;
        }
    
        //image=====imagethree=======================
    
        if($image_three){
            if(file_exists($request->image_three)){
                 @unlink($data->image_three);
            }
    
            $image_three_name = hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
            Image::make($image_three)->resize(500,500)->save('public/media/product/'.$image_three_name);
            $data->image_three = 'public/media/product/'.$image_three_name;
        }
            //dd($data->toArray());
            $data->save();
    
       
            return Redirect()->route('user.product.list')->with('success', 'Product inserted successfully');
        
       }//end function

       public function UserProductDescription($id){
            $product = Product::find($id);
            return view('pages.product.user_productdescription',compact('product'));
       }//end function

       public function UserProductDescriptionList(Request $request){
        $alldata = Description::where('product_id',$request->product_id )->get();
        return response()->json($alldata);
       }//end function

       public function UserProductDescriptionStore(Request $request){
            

        if(empty($request->id)){
            $value = new Description;
            $value->product_id = $request->product_id;
            $value->specification_name = $request->specification_name;
            $value->specification_value = $request->specification_value;
            $value->save();

        }else{
            $value =  Description::find($request->id);

            $value->product_id = $request->product_id;
            $value->specification_name = $request->specification_name;
            $value->specification_value = $request->specification_value;

            $value->save();
        }

        $alldata = Description::where('product_id',$request->product_id )->get();


        return response()->json(['value' => $alldata   ,'success'=>'successfully added']);
       }//end function


       public function UserProductDescriptionEdit($id){
        $alldata = Description::find($id);
        //dd($alldata->toArray());
        return response()->json($alldata);
       }//end function

       public function UserProductDescriptionDelete($id){
        $deletedata = Description::find($id);
        $product_id = $deletedata->product_id;
        Description::find($id)->delete();
        $alldata = Description::where('product_id',$product_id )->get();
        return response()->json(['value' => $alldata ,'success' => 'successfully deleted']);
       }//end function

}
