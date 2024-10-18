<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login", function () {
    $contacts = [];
    $faker = Faker::create();
    for ($i = 1; $i <= 10; $i++) {
        $contacts[] = [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'phone' => $faker->phoneNumber
        ];
    };
    return view("contact", ['contacts' => $contacts]);
});

Route::get("/homepage", function () {
    return view("homepage");
});         


Route::get("/Register", function () {
    return view("Register");
});         