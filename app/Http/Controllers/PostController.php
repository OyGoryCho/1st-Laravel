<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
    return 'Страница списка постов';
    }

    public function create()
    {
    return 'Страница создания поста';
    }
    
    public function store ()
    {
    return 'Запрос создания поста';
    }

    public function show($post)
    {
    return "Страница просмотр поста {$post}";
    }

    public function edit()
    {
    return 'Страница изменения поста поста';
    }

    public function update()
    {
    return 'Запрос ихменения поста';
    }

    public function delete()
    {
    return 'Запрос удаления поста';
    }

    public function like ()
    {
    return 'Лайк + 1';
    }
    
}