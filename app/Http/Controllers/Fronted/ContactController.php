<?php

namespace App\Http\Controllers\Fronted;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index() {
        $contact = Contact::all();
        return view('backend.contact.index', [
            "title" => "Contact Message",
        ] ,compact('contact'));
    }

    public function store(Request $request) {

        Contact::insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);
        session()->flash('success','Your Message Submited, Succesfully');
        return redirect()->back();
    }

    public function delete($id){

        Contact::findOrFail($id)->delete();

        session()->flash('success','Contact Deleted, Successfully');
        return redirect()->back();

    } // End Method

}
