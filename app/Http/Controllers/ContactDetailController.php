<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactDetailController extends Controller
{
    public function show(Contact $contact)
    {
        return view('contacts.show', ['contact' => $contact]);
    }
}
