<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function __construct()
    {
        $this->middleware('throttle:10');
    }
    public function __invoke(Request $request)
    {
        //action

        //respoce
      //  return 'Test';

       // return response('test', 200, ['hea' => 'ders',]); //(Не обязательно указывать вторую и третью)
       //return response()->json([], 200 ,[])
    }
}
