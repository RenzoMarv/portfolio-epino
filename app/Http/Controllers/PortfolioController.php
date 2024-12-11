<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function autobiography()
    {
        return view('autobiography');
    }

    public function article()
    {
        return view('article');
    }

    public function blog()
    {
        return view('blog');
    }

    public function form()
    {
        return view('form');
    }
}
