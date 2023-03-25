<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Description;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function SearchSpecificProduct(Request $request){
        
        $search = $request->search;
        
        if($search == ''){
            
            $products = Product::select('id','product_name','image_one')->limit(5)->get();
         }else{
            
            $products = Product::select('id','product_name','image_one')->where('product_name', 'like', '%' .$search . '%')->limit(5)->get();
            
         }

         $detail = array();
         foreach($products as $product){
             
            $detail[] = array(
                    //"id"=>$product->id,
                    "url"  => route('item.detail',$product->id),
                    "label"=>$product->product_name,                    
                    "image"=>url('/'.$product->image_one),                                        
                );
         }
       
        
         return response()->json($detail);

    }//end function

    public function SearchCategoryProduct($id){
        $data['product'] = Product::where('category_id', $id)->get();
        $data['category'] = Category::find($id);
        $data['categories'] = Category::all();
        $data['brands'] = Brand::all();

        return view('pages.product.category_product',$data);
        
    }//end function

    public function SearchBrandProduct($id){
        $data['product'] = Product::where('brand_id', $id)->get();
        $data['brand'] = Brand::find($id);
        $data['categories'] = Category::all();
        $data['brands'] = Brand::all();
        
        return view('pages.product.category_product',$data);
    }
}
