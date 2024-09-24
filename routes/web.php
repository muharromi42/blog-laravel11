<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'romay']);
});

Route::get('/blog', function () {
    return view('blog', [
        'judul' => 'angka kelahiran jepang menurun',
        'isi' => '
Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi voluptatibus eligendi enim vitae hic suscipit quod reprehenderit minima modi voluptatem cupiditate consectetur deleniti accusamus nulla magni sequi tempore, similique iure?'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'nama' => 'romay',
        'email' => 'muharromi42@gmail.com',
    ]);
});
