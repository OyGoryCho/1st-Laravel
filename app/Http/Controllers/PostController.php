<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = (object)[
            'id' => 1488,
            'title' => 'Lorem ipsum dolor sit amet',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet consectetur adipisicing elit. Expedita, eos!',
            ];
            $posts = array_fill(0, 10, $post);
            return view('user.posts.index', compact('posts'));
    }

    public function create()
    {
    return view('user.posts.create');
    }
    
    public function store (Request $request)
    {
        $title =  $request->input('title');
        $content = $request->input('content');
      // dd($title , $content);
        alert(__('Пост создан успешно!'));
        return redirect()->route('user.posts.show', 1488);

    }

    public function show($post)
    {
        $post = (object)[
            'id' => 1488,
            'title' => 'Lorem ipsum dolor sit amet',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet consectetur adipisicing elit. Expedita, eos!',
            ];
            return view('user.posts.show', compact('post'));
    }

    public function edit($post)
    {
        $post = (object)[
            'id' => 1488,
            'title' => 'Lorem ipsum dolor sit amet',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet consectetur adipisicing elit. Expedita, eos!',
            ];
            return view('user.posts.edit', compact('post'));
    }

    public function update(Request $request)
    {
        $title =  $request->input('title');
        $content = $request->input('content');
        //dd($title , $content);
        alert(__('Пост изменен!'), 'danger');
        return redirect()->route('user.posts.show', 1488);
    }

    public function delete($post)
    {
        alert(__('Пост удален!'));

        return redirect()->route('user.posts');
    }

    public function like ()
    {
    return 'Лайк + 1';
    }
    
}