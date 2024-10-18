@extends('components.template')
@section('title', 'Register')
@section('content')

<div class="min-h-screen flex flex-col justify-center items-center bg-gradient-to-br from-pink-200 to-peach-100" style="background-image: url('https://i.pinimg.com/736x/f5/ac/15/f5ac1598fe9350461cc7336346695145.jpg'); background-size: cover; background-position: center;">
    <div class="w-full max-w-md bg-white bg-opacity-90 p-8 rounded-3xl shadow-md border border-pink-300 ">
        <h1 class="text-4xl font-bold text-pink-600 mb-6 font-sans text-center">Register</h1>
        <p class="text-pink-500 text-lg mb-8 text-center">gabung sekarang, jangan sampai ketinggalan!</p>

        <form action="/register" method="POST">
            @csrf
            <div class="form-group mb-4">
                <label for="name" class="form-label text-pink-600">Name</label>
                <input type="text" class="form-control border-pink-300 rounded-lg focus:ring-pink-500 focus:border-pink-500" id="name" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="form-group mb-4">
                <label for="email" class="form-label text-pink-600">Email</label>
                <input type="email" class="form-control border-pink-300 rounded-lg focus:ring-pink-500 focus:border-pink-500" id="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="form-group mb-4">
                <label for="password" class="form-label text-pink-600">Password</label>
                <input type="password" class="form-control border-pink-300 rounded-lg focus:ring-pink-500 focus:border-pink-500" id="password" name="password" required>
            </div>
            <div class="form-group mb-4">
                <label for="password_confirmation" class="form-label text-pink-600">Confirm Password</label>
                <input type="password" class="form-control border-pink-300 rounded-lg focus:ring-pink-500 focus:border-pink-500" id="password_confirmation" name="password_confirmation" required>
            </div>

            <div class="text-center">
                <button type="submit" class="bg-pink-400 text-white px-6 py-3 rounded-full shadow-sm hover:bg-pink-500 transition duration-300 transform hover:scale-105">
                    Register
                </button>
            </div>
        </form>

        <p class="mt-4 text-center text-sm text-gray-600">
            Already have an account? <a href="/login" class="text-pink-600 hover:text-pink-700">Login now</a>
        </p>
    </div>
</div>

@endsection
