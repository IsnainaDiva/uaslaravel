<?php

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


Route::get('/blog', function () {
    $blog_posts = [
    [
    "title" => "Judul Post Pertama",
    "slug" => "judul-post-pertama",
    "author" => "Isnaina Ardiva Lubis",
    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quaerat laboriosam earum amet fuga non eaque quod officia exercitationem, 
harum nam deserunt porro qui eligendi quibusdam velit accusamus quam. Tenetur placeat animi quas reprehenderit tempore magni dignissimos deleniti? Esse obcaecati quasi quis. 
Cum natus tempore corrupti quis ea laudantium neque nulla voluptates, tenetur debitis laborum quaerat officia quibusdam ratione ducimus! Qui,
earum esse libero corporis recusandae dolore deleniti inventore cumque ipsum, tempore, repellendus temporibus sed laborum officiis! Beatae, quibusdam aut!"
    ],
    [
    "title" => "Judul Post Kedua",
    "slug" => "judul-post-kedua",
    "author" => "Isnaina",
    "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores veritatis voluptatibus minus vel enim eius quos quis id dolorem eligendi unde error recusandae quod obcaecati sed, minima harum similique! 
    Quos ex placeat assumenda possimus. Placeat, accusantium provident quas facere dolorum inventore sequi voluptatem accusamus ut amet possimus veniam ipsum quod eum molestias quisquam minus autem voluptate distinctio. 
    Unde corrupti explicabo, nulla fuga ea sit iure amet corporis sequi officia atque necessitatibus quod temporibus aperiam sunt aspernatur commodi quia accusantium sed delectus? Temporibus in nemo necessitatibus nesciunt, 
    corporis repellat non ipsa alias ex deserunt velit sed hic vel impedit quas laborum."
    ],
];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

Route ::get('posts/{slug}', function($slug){
    return view('post', [
        "title" =>"Single Post"
    ]);
});