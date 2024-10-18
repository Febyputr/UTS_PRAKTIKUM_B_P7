@extends('components.template')
@section('title', 'Homepage')
@section('content')
    <div class="min-h-screen flex flex-col justify-center items-center" style="background-image: url('https://img.lovepik.com/photo/40136/3055.jpg_wh860.jpg'); background-size: cover; background-position: center;">
        <div class="bg-pink-100 bg-opacity-95 p-10 rounded-2xl border border-pink-300 shadow-lg max-w-md">
            <h1 class="text-5xl font-bold text-pink-600 mb-6 font-sans text-center">Welcome, Peeps!</h1>
            <p class="text-pink-500 text-lg mb-8 text-center">Hallo, selamat melihat hasil tugas PWEB Feby</p>
            <div class="flex flex-col space-y-4">
                <!-- Tombol Login -->
                <a href="/login" class="bg-pink-500 text-white px-6 py-3 rounded-lg text-lg hover:bg-pink-600 transition duration-300 transform hover:scale-105 text-center shadow-md">
                    Login
                </a>
                <!-- Tombol Register -->
                <a href="Register" class="bg-fuchsia-500 text-pink-500 px-6 py-3 rounded-lg text-pink hover:bg-fuchsia-600 transition duration-300 transform hover:scale-105 text-center shadow-md">
                    Register
                </a>
            </div>
        </div>
    </div>
@endsection

