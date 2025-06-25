<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', [
        "title"=> "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title"=>"About",
        "name"=>"Isnaina Ardiva Lubis",
        "email"=>"isnainadivalbs@gmail.com",
        "image"=>"potoku.jpg",
    ]
);
});


Route::get('/posts', function () {
    return view('posts', [
        "title" => "Posts",
        "posts" => Post::all()
]);

});

Route ::get('posts/{slug}', function($slug){
     
    return view('post', [
        "title" =>"Single Post",
        "post" => Post::find($slug)
    ]);
});