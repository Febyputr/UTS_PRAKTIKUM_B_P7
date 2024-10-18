@extends('components.template')
@section('title', 'Contact')
@section('content')

<div class="min-h-screen flex flex-col justify-center items-center bg-gradient-to-br from-pink-200 to-peach-100 p-10" style="background-image: url('https://i.pinimg.com/736x/f5/ac/15/f5ac1598fe9350461cc7336346695145.jpg'); background-size: cover; background-position: center;">
    <div class="bg-white bg-opacity-90 p-8 rounded-3xl shadow-md border border-pink-300 w-full max-w-4xl">
        <h1 class="text-4xl font-bold text-pink-600 mb-6 font-sans text-center"> Contacts</h1>
        
        <div class="overflow-x-auto">
            <table class="table-auto w-full text-left border-collapse text-sm"> <!-- Menggunakan text-sm untuk ukuran font kecil -->
                <thead>
                    <tr class="bg-pink-200 text-pink-800">
                        <th class="p-2 border-b-2 border-pink-300">No.</th> 
                        <th class="p-2 border-b-2 border-pink-300">Name</th>
                        <th class="p-2 border-b-2 border-pink-300">Email</th>
                        <th class="p-2 border-b-2 border-pink-300">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr class="hover:bg-pink-100 transition duration-200">
                            <td class="p-2 border-b border-pink-300">{{ $loop->iteration }}</td>
                            <td class="p-2 border-b border-pink-300">{{ $contact["name"] }}</td>
                            <td class="p-2 border-b border-pink-300">{{ $contact["email"] }}</td>
                            <td class="p-2 border-b border-pink-300">{{ $contact["phone"] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
