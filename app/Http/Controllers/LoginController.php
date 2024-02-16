<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        // $foo = session()->get('foo', 'bar');

        // dd($foo);
        //session->has('foo); проверяет булево есть ли значение в куки
        // $foo = session('foo');
        // //session->all(); Выводит все значения куки
        // dd($foo);
        return view('login.index');

    }

    public function store(Request $request)
    {
        //authenticated user

        alert(__('Добро пожаловать!'));
        
        return redirect()->route('user');
        //$session = app()->make('session');

        //$session = session();
        // session()->forget('foo');
        // session()->flush(); Все удалить;
        // session()->put('foo', 'bar');
        //session(['foo' => 'Bar',]);
        


        // $ip = $request->ip();
        // $path = $request->path();
        // $url = $request->url();
        // $full = $request->fullurl(); // Полный url с query параметрами
        // dd($ip, $path, $url, $full);

        // dd($request->Is('log*'));
        // dd($request->routeIs('log*'));

    //     $email = $request->input('email');
    //     $password = $request->input('password');
    // // $remember = !! $request->input('remember');
    //     $remember = $request->boolean('remember');

    //     dd($email, $password, $remember);

       // return response()->redirectToRoute('user');
    }
}
