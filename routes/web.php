<?php

use App\Post;
use App\Category;
use App\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
        'active' => "Home",
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about',[
        "title" => "about",
        'active' => "about",
        "name"=> "Syahnan Azahra",
        "email"=> "syahnan.213040108@mail.unpas.ac.id",
        "image"=> "nan.jpg"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'active' => "categories",
        'categories' => Category::all()
    ]);
});



// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts', [
//         'title' => "Post by Category : $category->name",
//         'active' => "categories",
//         'posts' => $category->posts->load('author', 'category')
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts', [
//         'title' => "User Post : $author->name",
//         'active' => "posts",
//         'posts' => $author->posts->load('author', 'category')
//     ]);
// });