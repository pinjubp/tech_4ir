<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function AddCategory(){
        return view('admin.category.add_category');
    }//end function


    public function StoreCategory(Request $request){

        //dd($request->toArray());

        $validateData  = $request->validate([
            'category_name'  => 'required|unique:categories|max:255',
        ]);
        
        $category = new Category();
        $category->category_name = strtolower($request->category_name);

        $category->save();
  
           return Redirect()->route('category.list')->with('success','Category inserted successfully'); 
        
    }//end function


    public function ListCategory(){
        $category = Category::all();
        //dd($category);
        return view('admin.category.list_category',compact('category'));
    }//end function


    
    public function EditCategory($id){
        $data['editdata'] = Category::find($id);

        //dd($data['editdata']->toArray());
        return view('admin.category.edit_category',$data);
    }//end function



    public function UpdateCategory(Request $request,$id){

        //dd($request->toArray());
       //dd($id);
        
        $validateData  = $request->validate([
           
            'category_name' => "required|max:255|unique:categories,category_name,$id", 
        ]);
        
        //$data = array();
        //$data = new Category();
        $data = Category::find($id);
        //dd($data->toArray());
        $data->category_name = strtolower($request->category_name);
       
         //$update = DB::table('categories')->where('id',$id)->update($data);

         //$update = Category::where('id',$id)->update($data);

         $update = $data->save();

        //dd($update);
        
        return Redirect()->route('category.list')->with('success','Category Updated successfully'); 
         
      

    }//end function


    public function DeleteCategory($id){
        //database
        //DB::table('categories')->where('id',$id)->delete();
        //Eloquent
        Category::find($id)->delete();

           return Redirect()->back()->with('error','Category deleted successfully'); 

    }
}
