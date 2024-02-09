<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
        public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
    //     $data = $request->all();
    //     $data = $request->except('name', 'password');
    //  $data = $request->only('name', 'password', 'email', 'remember');
        
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
    // $remember = !! $request->input('remember');
        $agreement = $request->boolean('agreement');

    //     dd($name, $email, $remember);

    //dd($request->has('name'));
    // dd($request->filled('name'));
    // dd($request->missing('name'));


        dd($email, $password, $agreement, $name);

        return 'Запрос на регистарцию';
    }
}
