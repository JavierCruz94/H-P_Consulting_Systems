<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $user = auth()->user();

        if ($user->isAdmin()) {
            return redirect('/adminWatch');
        }

        if ($user->isConsultant()) {
            return redirect('/newReq');
        }

        if ($user->isCustomer()) {
            return redirect('/clientReq');
        }
    }
}
