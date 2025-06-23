<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about',[
        "name"=>"Isnaina Ardiva Lubis",
        "email"=>"isnainadivalbs@gmail.com",
        "image"=>"potoku.jpg",
    ]
);
});

Route::get('/blog', function () {
    return view('posts');
});