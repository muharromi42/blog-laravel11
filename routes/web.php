<?php

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
        'posts' => [
            [
                'id' => 1,
                'slug' => 'judul-1',
                'title' => 'judul 1',
                'author' => 'muharromi',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus porro architecto repellendus quas cumque blanditiis vero odio similique itaque ab minima laborum neque nisi ducimus, excepturi tempora sunt amet placeat!'
            ],
            [
                'id' => 2,
                'slug' => 'judul-2',
                'title' => 'judul 2',
                'author' => 'Ardhana',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quasi est maiores amet accusantium nemo tenetur numquam facilis quia illo laboriosam quae qui, excepturi, veniam quis officiis earum harum pariatur!'
            ],
        ]
    ]);
});

Route::get('/posts/{id}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-1',
            'title' => 'judul 1',
            'author' => 'muharromi',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus porro architecto repellendus quas cumque blanditiis vero odio similique itaque ab minima laborum neque nisi ducimus, excepturi tempora sunt amet placeat!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-2',
            'title' => 'judul 2',
            'author' => 'Ardhana',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quasi est maiores amet accusantium nemo tenetur numquam facilis quia illo laboriosam quae qui, excepturi, veniam quis officiis earum harum pariatur!'
        ],
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', [
        'nama' => 'romay',
        'email' => 'muharromi42@gmail.com',
        'title' => 'Contact',
    ]);
});
