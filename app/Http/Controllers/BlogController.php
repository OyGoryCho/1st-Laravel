<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        //$data = $request->all();
        $search = $request->input('search');
        $category_id = $request->input('category_id');
        dd($search, $category_id);

        $post = (object)[
        'id' => 1488,
        'title' => 'Lorem ipsum dolor sit amet',
        'content' => 'Lorem ipsum <strong>dolor</strong> sit amet consectetur adipisicing elit. Expedita, eos!',
        'category_id' => 1,
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
