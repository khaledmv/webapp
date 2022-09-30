<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ContactForm;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // show contact page

    public function index(){
        $contacts = Contact::all();
        return view('backend.contact.index', compact('contacts'));
    }


    public function contactForm( Request $request){
         
        ContactForm::insert([
            'name'=> $request->name,
            'email'=> $request->email,
            'website'=> $request->website,
            'message'=> $request->message,
            'created_at'=> Carbon::now()
        ]);

        return Redirect()->route('contact-page')->with('success', 'Contact Inserted Successfully');
    }
}
