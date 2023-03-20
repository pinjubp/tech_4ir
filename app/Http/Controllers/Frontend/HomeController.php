<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(){
    

        $category = DB::table('categories')
                    ->Join('products','categories.id','=','products.category_id')                                                                                
                    ->whereNotNull('products.category_id')
                    ->select('categories.*')                                         
                    ->groupBy('products.category_id')                                      
                    ->get();
                   

        
        /**direct sql method*/

        //$category = DB::select("select * from categories inner join products on products.category_id = categories.id where products.category_id is not null group by products.category_id");

        //dd($category);

        return view('pages.index',compact('category'));
    }
 
}
