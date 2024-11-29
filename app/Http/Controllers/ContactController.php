<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
            'country' => 'required',
            'message' => 'nullable',
        ]);

        Contact::create($request->all());

        return redirect()->back()->with('success', 'Pesan Anda telah berhasil dikirim!');
    }
}
