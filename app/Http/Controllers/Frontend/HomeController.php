<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use  App\Models\Contact;
use  App\Models\ContactAddress;
use  App\Models\ContactIntro;
use App\Models\Intro;
use App\Models\Service;
use App\Models\ServiceIntro;

class HomeController extends Controller
{
    //
    public function index(){
    
        $data['introdata'] = Intro::where('status',1)->get();
        $data['category']= DB::table('categories')
                    ->Join('products','categories.id','=','products.category_id')                                                                                
                    ->whereNotNull('products.category_id')
                    ->select('categories.*')                                         
                    ->groupBy('products.category_id')                                      
                    ->get();
                   

        
        /**direct sql method*/

        //$category = DB::select("select * from categories inner join products on products.category_id = categories.id where products.category_id is not null group by products.category_id");

        //dd($data['introdata']->toArray());

        return view('pages.index',$data);
    }

    public function FrontendContactView(){
        $allData['contactaddress'] = ContactAddress::all();
        $allData['contactintro'] = ContactIntro::all();
        //dd($allData['contactintro'][0]->toArray());
        return view('pages.contact',$allData);
    }

    public function ContactStore(Request $request){
        //dd($request->toArray());
        $request->validate([                       
            'name' => "required",  
            'email' => 'required',
            'message' => 'required',

        ]
      );

      $data = new Contact;

      $data->name = $request->name;
      $data->email = $request->email;
      $data->phone = $request->phone;
      $data->message = $request->message;

      $data->save();

      return redirect()->back()->with('success'," message send successfully");

    }//end function

    public function FrontedService(){
        $data['service'] = Service::all();
        $data['serviceintro'] = ServiceIntro::first();

        //dd($data['serviceintro']->toArray()); 

        return view('pages.service',$data);
    }

    public function FrontedAbout(){
        return view('pages.about');
    }
 
}
