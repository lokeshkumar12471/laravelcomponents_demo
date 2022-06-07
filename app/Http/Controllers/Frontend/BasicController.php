<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class BasicController extends Controller
{
    public function index()
    {
        return view('layouts.Frontend.main');
    }
    public function create()
    {
        return view('layouts.Frontend.section');

    }
}