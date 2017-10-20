<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct() {
        //$this->middleware('auth');
    }

    public function index() {
        $user = auth()->user();
        //$user = Auth::user();

        if ($user->isAdmin()) {
            //return redirect('/adminWatch');
            echo "SOY UN ADMIN";
        }
        if ($user->isConsultant()) {
            //return redirect('/admin/home');
            echo "SOY UN Consultant";
        }
        if ($user->isCustomer()) {
            //return redirect('/admin/home');
            echo "SOY UN customer";
        }

    }
}
