<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return 'Страница регистрации и аутентификации';
    }

    public function store()
    {
        return 'Запрос';
    }
}
