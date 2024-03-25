<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          // Busca todos os contatos
          $contacts = Contact::orderBy('id', 'DESC')->paginate(5);
          // Retorna a view index com os contatos
          return view('contacts.index', ['contacts' => $contacts]);
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        // Redirecionar de volta para a página da Lista
        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully');
    }
}
