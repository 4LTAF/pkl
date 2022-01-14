<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class KontactController extends Controller
{
    public function index()
    {
        return view('Kontak.index');

    }

    public function store(Request $request)
    {
        $contact = new Contact;

        $contact->des = $request->input('des');
        $contact->sub = $request->input('sub');
        $contact->nama = $request->input('nama');
        $contact->email = $request->input('email');

        $contact->save();
        return back();
        return redirect()->route('Kontak.index');

    }

    public function create()
    {
        return view('Kontak.index');
    }
}
