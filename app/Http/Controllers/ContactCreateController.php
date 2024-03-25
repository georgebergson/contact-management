<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ContactCreateController extends Controller
{
    public function index()
    {
        return view('contacts.create');
    }

    public function store(ContactRequest $request)
    {
        try {
            // Validação dos dados do formulário por Request Especifica
            // Os dados já estão validados neste ponto
            $validatedData = $request->validated();

            // Criação do novo contato no banco de dados
            Contact::create($validatedData);

            // Redirecionamento após a criação do contato
            return redirect()->route('contacts.index')->with('success', 'Contact created successfully!');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator->errors())->withInput();
        }
    }
}
