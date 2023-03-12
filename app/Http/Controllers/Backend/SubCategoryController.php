<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
    //
    public function AddsubCategory(){
        
        $category =  Category::all();
        
        return view('admin.subcategory.add_subcategory',compact('category'));
    }//end  function


    public function StoresubCategory(Request $request){

        //dd($request->toArray());

        $validateData  = $request->validate([
            'subcategory_name'  => 'required|unique:sub_categories|max:255',
            'category_id' => 'required',
        ]);
        
        $subcategory = new SubCategory();
        $subcategory->category_id = $request->category_id;
        $subcategory->subcategory_name = strtolower($request->subcategory_name);

        $subcategory->save();
  
           return Redirect()->route('subcategory.list')->with('success','Sub Category inserted successfully'); 
        
    }//end function

    public function ListsubCategory(){
        $subcategory = SubCategory::all();
        //dd($subcategory->toArray());

        return view('admin.subcategory.list_subcategory',compact('subcategory'));
    }//end function

    public function EditsubCategory($id){

        $editdata['category'] =  Category::all();
        $editdata['subcategory'] =  SubCategory::find($id);

        //dd($editdata);

        return view('admin.subcategory.edit_subcategory',$editdata);


    }

    public function UpdatesubCategory(Request $request,$id){
        //dd($request->toArray());       
        $validateData  = $request->validate([
           
            'subcategory_name' => "required|max:255",
            'category_id' => "required", 
        ]);
         

        $updatedata =SubCategory::find($id);
        $updatedata->subcategory_name = $request->subcategory_name;
        $updatedata->category_id = $request->category_id;

        //dd($data);

        ///SubCategory::where('id',$id)->update($data);

        $updatedata->save();

        
          
           return Redirect()->route('subcategory.list')->with('success','SubCategory Updated successfully'); 

    }//end function


    public function DeletesubCategory($id){
        SubCategory::find($id)->delete();
        return Redirect()->back()->with('error','SubCategory Deleted successfully');
    }
}
