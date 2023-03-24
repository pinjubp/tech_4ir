<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Description;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    //
    public function ItemDetail($id){    
        $data['detail'] = Product::find($id);
        //dd($data['detail']->toArray());
        $data['user'] = User::where('id',$data['detail']->user_id)->first(); 
        $data['category'] = Category::where('id',$data['detail']->category_id)->first(); 
        //dd($data['category']->toArray());
        $data['subcategory'] = SubCategory::where('id',$data['detail']->subcategory_id)->first(); 
        $data['brand'] = Brand::where('id',$data['detail']->brand_id)->first(); 
        $data['description'] = Description::where('product_id',$id)->get();
        $data['sameproduct'] = Product::where('category_id',$data['detail']->category_id)->get();
        //dd($data['detail']->toArray());

        return view('pages.product.detail_product',$data);

    }//end function

    public function CompareProduct($id){
        $data['product'] = Product::find($id);
        $data['description'] = Description::where('product_id',$id)->get();
        $data['user'] = User::where('id',$data['product']->user_id)->first(); 
        $data['category'] = Category::where('id',$data['product']->category_id)->first(); 
        $data['brand'] = Brand::where('id',$data['product']->brand_id)->first(); 
        $data['sameproduct'] = Product::where('category_id',$data['product']->category_id)->get();

        //return view('pages.searchtest',$data);
        return view('pages.product.compare_product',$data);

    }//end function

    public function CompareSearchProduct(Request $request){
        $search = $request->search;
        //dd($search->toArray());
        if($search == ''){
            //$products = Product::orderby('product_name','asc')->select('id','product_name','image_one')->limit(5)->get();
            $products = Product::select('id','product_name','image_one')->limit(5)->get();
         }else{
            //$products = Product::orderby('product_name','asc')->select('id','product_name','image_one')->where('product_name', 'like', '%' .$search . '%')->limit(5)->get();
            $products = Product::select('id','product_name','image_one')->where('product_name', 'like', '%' .$search . '%')->limit(5)->get();
            
         }

         
         //dd($products->toArray());
         $response = array();
         foreach($products as $product){
             
            $response[] = array(
                    //"id"=>$product->id,
                    "url"  => route('compare.find2.product',$product->id),
                    "label"=>$product->product_name,
                    //"image"=>url('public/'.$product->image_one),
                    "image"=>url('/'.$product->image_one),
                    
                    
                );
         }
       
         //return response()->json($response);
         return response()->json($response);
    }//end function

    public function CompareFind2Product($id){
        //dd($id);
        //$response = Product::with('description')->where('id',$id)->first();
        // $response = DB::table('products')
        //             ->join('descriptions','products.id','descriptions.product_id')
        //             ->select('products.*','descriptions.specification_name','descriptions.specification_value')
        //             ->where('products.id',$id)
        //             ->get();
        //dd($response);

        //return response()->json($response);

        $product = Product::select('product_name','image_one','image_two','image_three')->where('id',$id)->first();
        $description = Description::where('product_id',$id)->get();

        //dd($product->image_one);
        if(!empty($product->image_one)){
            $image_one = url('/'.$product->image_one);
        }else{
            $image_one = url(''.'upload/no_image.jpg' );
        }
        if(!empty($product->image_two)){
            $image_two = url('/'.$product->image_two);
        }else{
            $image_two = url(''.'upload/no_image.jpg' );
        }
        
        if(!empty($product->image_three)){
            $image_three = url('/'.$product->image_three);
        }else{
            $image_two = url(''.'upload/no_image.jpg' );
        }
       
        //$image_two = url('/'.$product->image_two);
       // $image_three = url('/'.$product->image_three);

        // $response[] = array(
        //      'product_name' => $product->product_name,
        //      'image_one' =>   url('/'.$product->image_one), 
        //      'image_two' =>   url('/'.$product->image_two), 
        //      'image_three' =>   url('/'.$product->image_three), 
        //     'description' => $description,
        // );

        return response()->json([
                            'product_name' => $product->product_name,
                            'image_one' => $image_one ,
                            'image_two' => $image_two  ,
                            'image_three' => $image_three ,                             
                            'description' => $description,
                            ]);

       
    }
}
