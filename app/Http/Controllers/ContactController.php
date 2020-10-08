<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::first();
        return view('admin.contact_index',compact('contact'));  

    }


    public function update(Request $request, Contact $contact)
    {
        $contact = Contact::first();
        // dd($request);
        $contact->update([
            'address' =>$request->address,
            'whatsapp_name' =>$request->whatsapp_name,
            'whatsapp_address' =>$request->whatsapp_address,
            'instagram_address' =>$request->instagram_address,
            'instagram_name' =>$request->instagram_name,
            'email' =>$request->email,
            'phone' =>$request->phone,
        ]);
        $request->session()->flash('msg', 'تماس ویرایش شد');
        return  redirect()->route('contact_index');
    }


}
