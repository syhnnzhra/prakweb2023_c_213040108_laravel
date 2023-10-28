<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about',[
        "title" => "about",
        "name"=> "Syahnan Azahra",
        "email"=> "syahnan.213040108@mail.unpas.ac.id",
        "image"=> "nan.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Syahnan Azahra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse rem et dolore sint, dolorem unde, amet pariatur adipisci excepturi facilis, inventore cumque error. Aliquid, nisi doloremque corrupti esse laboriosam ea hic nostrum dolore iusto aperiam, officia, voluptate laudantium beatae placeat autem fugit alias asperiores voluptates id voluptatum. Corporis omnis consectetur iusto temporibus sed corrupti minima a iste, neque sint molestias distinctio deleniti aperiam ut nulla aliquam facilis totam exercitationem doloremque delectus optio? Ad fugiat quis quia quasi, voluptates laborum enim."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "AlBarra Permana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse rem et dolore sint, dolorem unde, amet pariatur adipisci excepturi facilis, inventore cumque error. Aliquid, nisi doloremque corrupti esse laboriosam ea hic nostrum dolore iusto aperiam, officia, voluptate laudantium beatae placeat autem fugit alias asperiores voluptates id voluptatum. Corporis omnis consectetur iusto temporibus sed corrupti minima a iste, neque sint molestias distinctio deleniti aperiam ut nulla aliquam facilis totam exercitationem doloremque delectus optio? Ad fugiat quis quia quasi, voluptates laborum enim."
        ]
    ];
    return view('posts', [
        "title" => "posts",
        "posts" => $blog_post
    ]);
});

Route::get('posts/{slug}', function($slug){
    $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Syahnan Azahra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse rem et dolore sint, dolorem unde, amet pariatur adipisci excepturi facilis, inventore cumque error. Aliquid, nisi doloremque corrupti esse laboriosam ea hic nostrum dolore iusto aperiam, officia, voluptate laudantium beatae placeat autem fugit alias asperiores voluptates id voluptatum. Corporis omnis consectetur iusto temporibus sed corrupti minima a iste, neque sint molestias distinctio deleniti aperiam ut nulla aliquam facilis totam exercitationem doloremque delectus optio? Ad fugiat quis quia quasi, voluptates laborum enim."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "AlBarra Permana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse rem et dolore sint, dolorem unde, amet pariatur adipisci excepturi facilis, inventore cumque error. Aliquid, nisi doloremque corrupti esse laboriosam ea hic nostrum dolore iusto aperiam, officia, voluptate laudantium beatae placeat autem fugit alias asperiores voluptates id voluptatum. Corporis omnis consectetur iusto temporibus sed corrupti minima a iste, neque sint molestias distinctio deleniti aperiam ut nulla aliquam facilis totam exercitationem doloremque delectus optio? Ad fugiat quis quia quasi, voluptates laborum enim."
        ]
    ];

    $new_post = [];
    foreach($blog_post as $post){
        if($post["slug"] == $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
