<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug): array
    {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (! $post) {
            abort(404);
        }

        return $post;
    }
}
