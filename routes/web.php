<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', [
        'nama' => 'romay',
        'title' => 'About',
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'blog',
        'posts' => Post::all()
    ]);
});

Route::get('/posts/{id}', function ($slug) {

    $post = Post::find($slug);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', [
        'nama' => 'romay',
        'email' => 'muharromi42@gmail.com',
        'title' => 'Contact',
    ]);
});
