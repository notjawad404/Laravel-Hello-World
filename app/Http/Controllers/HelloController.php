<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $string = "Hello World!";

        return view("hello", compact('string'));
    }
}