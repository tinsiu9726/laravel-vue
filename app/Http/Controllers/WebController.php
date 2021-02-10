<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    function index()
    {
        return view('Welcome');
    }
    function layout()
    {
        return view('layout');
    }
}

