@extends('home')

@section('dynamic_content')
<div class="w-3/5 mx-auto p-6 lg:p-8">
    @auth
    <div class="flex justify-end">

        @include('components.buttons-create', ['route' => route('contacts.create'), 'label' => 'Create New Contact'])

    </div>
    @endauth
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    @auth
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                    @endauth
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $contact->name }}
                    </th>
                    @auth
                    <td class="flex px-1 py-4 justify-end">

                    @include('components.buttons-details', ['route' => route('contacts.show', $contact->id), 'label' => 'Details'])

                    @include('components.buttons-edit', ['route' => route('contacts.edit', ['id' => $contact->id]),'label' => 'Edit'])

                    @include('components.buttons-delete', ['action' => route('contacts.destroy', ['contact' => $contact->id]),'label' => 'Delete'])
                    </td>
                    @endauth
                </tr>
                @endforeach

            </tbody>
        </table>
        <nav class="w-full ps-2" aria-label="Table navigation">
            {{ $contacts->links() }}
        </nav>
    </div>

</div>
@endsection
