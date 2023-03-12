<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Product;
use App\Models\User;
use App\Models\Specification;
use App\Models\SpecificationValue;
use Intervention\Image\ImageManager;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function AddProduct(){
        $data['user'] = User::where('status',1)->get();
        $data['category'] = Category::all();
        $data['subcategory'] = SubCategory::all();
        $data['brand'] = Brand::all();

        //dd($data['user']->toArray());

        return view('admin.product.add_product',$data);
    }//end function

    public function GetSubcategory($id){
        $subcategory = SubCategory::where('category_id',$id)->get();
       
        return json_encode($subcategory);
    }//end function


    public function StoreProduct(Request $request){
        //dd($request->toArray());

        $data = new Product();

        $data->product_name = $request->product_name;
        $data->product_code = $request->product_code;

        $data->category_id = $request->category_id;
        $data->subcategory_id = $request->subcategory_id;
        $data->brand_id = $request->brand_id;
       
        $data->user_id = $request->user_id;


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

       
            return Redirect()->route('product.detail',$data->id)->with('success', 'Product inserted successfully');


    }//end function

    public function ListProduct(){
        $product  = Product::all();
        //dd($product->toArray());
        return view('admin.product.list_product',compact('product'));
    }//end function

    public function ProductToggle($id){       
        $data =Product::find($id);
        if($data->status == 1){
            Product::where('id',$id)->update(['status'=> 0]);
           $status = 0;
           return response()->json($status);

        }else{
            Product::where('id',$id)->update(['status'=> 1]);
           $status = 1;
           return response()->json($status);
        }

   }//end functions

   public function EditProduct($id){
    $data['product'] =Product::find($id);
    $data['user'] = User::all();
    $data['category'] = Category::all();   
    $data['subcategory']  = SubCategory::where('category_id',$data['product']->category_id)->get();
    $data['brand'] = Brand::all();
    //dd($data['subcategory']->toArray());
    return view('admin.product.edit_product',$data);

   }
   public function DetailProduct($id){
    $data['product'] =Product::find($id);
    //dd($data['product']->subcategory_id);
    $data['user'] = User::where('id',$data['product']->user_id)->first();
    $data['category'] = Category::where('id',$data['product']->category_id)->first();   
    //if(!($data['product']->subcategory_id == null)){
        $data['subcategory']  = SubCategory::where('id',$data['product']->subcategory_id)->first();
    //}
    $data['brand'] = Brand::where('id',$data['product']->brand_id)->first();  
    
    return view('admin.product.detail_product',$data);

   }

   

   public function UpdateProduct(Request $request,$id){

        
    $data =Product::find($id);

    $data->product_name = $request->product_name;
    $data->product_code = $request->product_code;

    $data->category_id = $request->category_id;
    $data->subcategory_id = $request->subcategory_id;
    $data->brand_id = $request->brand_id;
    $data->user_id = $request->user_id;


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

   
        return Redirect()->route('product.list')->with('success', 'Product inserted successfully');


   }//end functions


   public function DeleteProduct($id){
        $data = Product::find($id);
        
        @unlink($data->image_one);
        @unlink($data->image_two);
        @unlink($data->image_three);

        $data->delete();

        return Redirect()->back()->with('success', 'Product inserted successfully'); 
   }//end function


   public function ProductSpecification($id){
        $product = Product::find($id);
        //dd($product->toArray());
        return view('admin.product.add_specification',compact('product'));
   }//end function

   public function ProductSpecificationStore(Request $request){
        //dd($request->toArray());
        //$data = array();
        // $data['specification_name'] = $request->specification_name;
        // $data['product_id'] = $request->product_id;
        
        $product = Product::find($request->product_id);
        //dd($product->toArray());

        if(! Specification::where('specification_name',$request->specification_name)
                	        ->where('product_id',$request->product_id)
                            ->exists()){

            $id = DB::table('specifications')->insertGetId([
                'specification_name' => $request->specification_name,
                'product_id' => $request->product_id,
                               
            ]);
            //$id = DB::table('specifications')->insertGetId($data);
                
            $specification = Specification::find($id);
         }else{
            // $specification =  Specification::where('specification_name',$request->specification_name)
            //                 ->where('product_id',$request->product_id)  
            //                 ->first();
            // $specification =  Specification::with(['SpecificationValue'])->where('specification_name',$request->specification_name)
            //                 ->where('product_id',$request->product_id)  
            //                 ->first();

            $specification = DB::table('specifications')
                           ->join('specification_values','specifications.id','specification_values.specification_id') 
                           ->select('specifications.*','specification_values.specification_value')
                           ->where('specifications.specification_name',$request->specification_name)
                            ->where('specifications.product_id',$request->product_id)  
                            ->first();    
         }

        
        //dd($specification->toArray());

         
         return response()->json($specification);

       

        
   }//end function

   //==========================ProductSpecificationList======================

   public function ProductSpecificationList(Request $request){

    // $data = array();

    // $data['specification_value'] = $request->specification_value;
    // $data['specification_id'] = $request->specification_id;
    // $data['product_id'] = $request->product_id;

    if(! SpecificationValue::where('specification_id',$request->specification_id)
    ->where('product_id',$request->product_id)
    ->exists()){
    
        $id = DB::table('specification_values')->insertGetId([
            'specification_value' => $request->specification_value,
            'specification_id' => $request->specification_id,
            'product_id' => $request->product_id,       
        ]);
        // $id = DB::table('specification_values')->insertGetId($data);
        
        $specification_values = SpecificationValue::find($id);
        
    } else {
        // return Redirect()->back()->with('error', 'specification value already exist');

        $spaceedit = SpecificationValue::where('specification_id',$request->specification_id)
        ->where('product_id',$request->product_id)->first();

        DB::table('specification_values')->where('id',$spaceedit->id)->update([
            'specification_value' => $request->specification_value,
            'specification_id' => $request->specification_id,
            'product_id' => $request->product_id,       
        ]);

        $specification_values = SpecificationValue::find($spaceedit->id);

    }

        // $specification_values = SpecificationValue::find($id);

        //$alldata = Specification::with(['SpecificationValue'])->where('product_id',$specification_values->product_id)->get();

        $alldata = DB::table('specification_values')
                    ->join('specifications','specification_values.specification_id','specifications.id')                    
                    ->select('specification_values.*','specifications.specification_name') 
                    ->where('specification_values.product_id',$specification_values->product_id)
                    ->get();

        //dd($alldata->toArray());


        return response()->json($alldata);

   }




   



      
}
