<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class AdminController extends Controller
{
    public function index()
    {
        return view('admins.index');
    }

    public function search(Request $request)
    {
        $query = Contact::query();

        $fullname = $request->input('fullname');
        $gender = $request->input('gender');
        $created_at = $request->input('created_at');
        $email = $request->input('email');


        foreach ($request->only(['fullname', 'gender','created_at','email']) as $key => $value) {
            $query->where($key, 'like', '%'.$value.'%');
        }

        $contacts = $query->Paginate(10);

        dump($contacts);

        return view('admins.index')
            ->with(['contacts' => $contacts]);
    }

    public function destroy(Request $request)
    {
        Contact::find($request->id)->delete();

        return redirect()
            ->route('admins.index');
    }
}
