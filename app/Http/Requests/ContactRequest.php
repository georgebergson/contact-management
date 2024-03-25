<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // alterar depois para logica
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:5|max:255',
            'contact' => 'required|string|size:9|unique:contacts',
            'email_address' => 'required|string|email|unique:contacts',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'The name field is required Please.',
            'contact.required' => 'The contact field is required mandatory.',
            'contact.size' => 'The contact must be 9 characters.',
            'contact.unique' => 'the telephone number must be unique.',
            'email_address.required' => 'The email address field is required.',
            'email_address.email' => 'Please enter a valid email address.',
            'email_address.unique' => 'The email address has already been taken.',
        ];
    }
}
