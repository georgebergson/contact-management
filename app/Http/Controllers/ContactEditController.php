<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactEditController extends Controller
{
    public function edit($id)
    {
        // Busca o contato pelo ID
        $contact = Contact::findOrFail($id);

        // Verifique se o contato existe
        if (!$contact) {
            // Se o contato não existir, redirecione com uma mensagem de erro
            return redirect()->route('contacts.index')->with('error', 'Contact not found.');
        }
        // Retorna a view de edição, passando o contato para ela
        return view('contacts.edit', compact('contact'));
    }
    public function update(Request $request, $id)
    {
        // Encontre o contato pelo ID
        $contact = Contact::findOrFail($id);

        // Atualize os dados do contato com os dados do formulário
        $contact->update([
            'name' => $request->name,
            'contact' => $request->contact,
            'email_address' => $request->email_address,
        ]);

        // Redirecione para alguma página após a atualização
        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully.');
    }
}
