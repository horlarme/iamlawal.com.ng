<?php

namespace App\Http\Controllers;

class FrontController extends Controller
{
    /**
     * Home Page Method
     */
    public function home()
    {
        return view('home');
    }
}
