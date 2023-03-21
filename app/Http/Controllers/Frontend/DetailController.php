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

    }
}
