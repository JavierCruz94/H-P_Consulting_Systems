<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('guest');
    }

    public function index(Request $request) {
        return view('pages.homepage');
    }

    public function doLogin()
    {
// process the form
    }
}
