<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactCreateController extends Controller
{
    public function index()
    {
          return view('contacts.create');
    }


}
