<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use App\Models\Newsletter;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // show contact page

    public function index(){
        $contacts = ContactForm::all();
        return view('backend.contact.index', compact('contacts'));
    }

    public function show($id){
        $contact = ContactForm::find($id);
        return view('backend.contact.show', compact('contact'));
    }

    public function delete($id){
            $mail = ContactForm::find($id);

            $mail->delete();

            return redirect()->route('admin-contact')->with('message', 'Mail Deleted Successfully');
    }


    public function newsletter(){
        $newsletters = Newsletter::all();

        return view('backend.newsletter.index', compact('newsletters'));

    }

    public function deleteNewsletter($id){
        
        $email = Newsletter::find($id);

        $email->delete();

        return redirect()->route('newsletter')->with('message', 'Email Deleted Successfully');
}




}
