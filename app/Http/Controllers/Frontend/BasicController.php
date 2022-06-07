<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class BasicController extends Controller
{
    public function index()
    {
        return view('layouts.main');
    }
    public function create()
    {
        return view('layouts.section');

    }
}