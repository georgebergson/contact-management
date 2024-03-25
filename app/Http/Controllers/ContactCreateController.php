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

    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'contact' => 'required|string|size:9',
            'email_address' => 'required|string|email|unique:contacts',
        ]);

        // Criação do novo contato no banco de dados
        Contact::create($validatedData);

        // Redirecionamento após a criação do contato
        return redirect()->route('contacts.index')->with('success', 'Contact created successfully!');
    }
}
