<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Step1Controller extends Controller
{
    public function index()
    {
        return view('html.step1');
    }
}
