<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Contact;
use  App\Models\ContactAddress;
use  App\Models\ContactIntro;

class ContactController extends Controller
{
    //
    public function ContactView(){
        $allData = Contact::all();
        return view('admin.contact.list_message',compact('allData'));
    }//end function

    

    public function ContactDetail($id){
        $viewData = Contact::find($id);
        return view('admin.contact.detail_message',compact('viewData'));

    }//end function

    public function ContactDelete($id){
        Contact::find($id)->delete();
        return redirect()->back()->with('error',"Message deleted");
    }//end fuction

    public function ContactAddressCreate(){
        return view('admin.contact.create_contactaddress');
    }//end function

    public function ContactAddressStore(Request $request){
        //dd($request->toArray());
        $request->validate([                       
            'addresstype' => "required",  
            'addressdetails' => 'required',

        ],
        [
            'addresstype.required' => 'Please Insert address Type',

            'addressdetails.required' => 'Please insert address  details',
        
        ]
      );

      $data = new ContactAddress;

      $data->addresstype = $request->addresstype;
      $data->addressdetails = $request->addressdetails;

      $data->save();

      return redirect()->route('contact.address.view')->with('success',"New contact address created successfully");
    }//end function

    public function ContactAddressView(){
        $allData = ContactAddress::all();
        return view('admin.contact.list_contactaddress',compact('allData'));
    }//end function

    public function ContactAddressEdit($id){
        $editData =  ContactAddress::find($id);
        return view('admin.contact.edit_contactadddress',compact('editData'));

    }//end function

    public function ContactAddressUpdate(Request $request,$id){
         //dd($request->toArray());
         $request->validate([                       
            'addresstype' => "required",  
            'addressdetails' => 'required',

        ],
        [
            'addresstype.required' => 'Please Insert address Type',

            'addressdetails.required' => 'Please insert address  details',
        
        ]
      );

      $data = ContactAddress::find($id);

      $data->addresstype = $request->addresstype;
      $data->addressdetails = $request->addressdetails;

      $data->save();

      return redirect()->route('contact.address.view')->with('success',"contact address Updated successfully");
    }//end function

    public function ContactAddressDelete($id){
        ContactAddress::find($id)->delete();
        return redirect()->back()->with('error',"contact address Deleted successfully");
    }// end function


    public  function ContactIntroView(){
        $allData = ContactIntro::all();
        return view('admin.contact.list_contactintro',compact('allData'));
    }//end function

    public function ContactIntroCreate(){
        return view('admin.contact.create_contactintro');
    }//end function 

    public function ContactIntroStore(Request $request){
        //dd($request->toArray());
        $request->validate([                       
            'contact_intro' => "required",  
            'contact_details' => 'required',

        ]
      );

      $data = new ContactIntro();

      $data->contact_intro = $request->contact_intro;
      $data->contact_details = $request->contact_details;

      $data->save();

      return redirect()->route('contact_intro.view')->with('success',"contact address Updated successfully");
    }//end function
}
