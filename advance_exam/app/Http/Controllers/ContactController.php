<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }
    public function confirm(ContactRequest $request)
    {
        $contact = $request->all();

        return view('contacts.confirm', $contact);
    }
    public function send(Request $request)
    {
        $contact = new Contact();
        $contact->fullname = $request->fullname;
        $contact->gender = $request->gender;
        $contact->email = $request->email;
        $contact->postcode = $request->postcode;
        $contact->address = $request->address;
        $contact->building_name = $request->building_name;
        $contact->opinion = $request->opinion;
        $contact->save();

        return view('contacts.thanks');
    }
}
