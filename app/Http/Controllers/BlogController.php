<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
    return 'Страница списка постов';
    }

    public function show($post)
    {
    return "Страница просмотр поста {$post}";
    }
}
