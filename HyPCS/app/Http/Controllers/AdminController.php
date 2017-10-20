<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$userAuth = auth()->user();
        $userAuth = Auth::user();
        $admin = $userAuth->userInfo;

        return view('pages.admin.watch')->with(['user' => $userAuth, 'admin' => $admin]);
    }
}
