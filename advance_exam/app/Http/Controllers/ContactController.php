<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }
    public function confirm(Request $request)
    {

    }
    public function send(Request $request)
    {
        
    }
}
