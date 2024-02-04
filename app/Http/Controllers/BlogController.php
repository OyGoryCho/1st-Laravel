<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $post = (object)[
        'id' => 1488,
        'title' => 'Lorem ipsum dolor sit amet',
        'content' => 'Lorem ipsum <strong>dolor</strong> sit amet consectetur adipisicing elit. Expedita, eos!',
        ];
        $posts = array_fill(0, 10, $post);
        return view('blog.index', compact('posts'));
    }

    public function show($post)
    {
        $post = (object)[
            'id' => 1488,
            'title' => 'Lorem ipsum dolor sit amet',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet consectetur adipisicing elit. Expedita, eos!',
            ];
            return view('blog.show', compact('post'));
    }
}
