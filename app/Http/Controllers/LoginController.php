<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function store(Request $request)
    {
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
       //return redirect()->route('user');
        return redirect()->back()->withInput();
    }
}
