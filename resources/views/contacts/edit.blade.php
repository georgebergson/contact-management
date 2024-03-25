@extends('home')

@section('dynamic_content')
<div class="block  p-6 bg-white border border-gray-100 rounded-lg shadow hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <form class="w-full mx-auto space-y-3" method="POST" action="{{ route('contacts.edit', $contact->id) }}">
        @csrf
        @method('PUT')

        <!-- Campos do formulário preenchidos com os dados do contato -->
        <div class="name">
            <label for="name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <div class="flex">
                <input type="text" id="name" name="name" value="{{ $contact->name }}" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your First Name">
            </div>
            @error('name')
            <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="contact">
            <label for="contact" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Contact</label>
            <div class="flex">
                <input type="tel" id="contact" name="contact" minlength="9" maxlength="9" value="{{ $contact->contact }}" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="(00) 0000-0000">
            </div>
            @error('contact')
            <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="email_address">
            <label for="email_address" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">E-mail Address</label>
            <div class="flex">
                <input type="email" id="email_address" name="email_address" value="{{ $contact->email_address }}" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="email@example.com">
            </div>
            @error('email_address')
            <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Botão para atualizar o contato -->
        <div class="flex justify-end">
            <button type="submit" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">
                <span>Update Contact</span>
            </button>
        </div>
    </form>

</div>





@endsection
