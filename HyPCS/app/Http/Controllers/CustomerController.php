<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Request as RequestModel;
class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function customerReqForm()
    {
        return view('pages.customer.customerReq');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showCalendar()
    {
        return view('pages.customer.calendar');
    }


    public function addReq(Request $request)
    {

        RequestModel::create([
            'id_customer' => \Auth::user()->id,
            'id_admin' => 1,
            'schedule' => false,
            'subject' => $request->subject,
            'description' => $request -> description,
            'importance' => $request->importancia,
            'deadline' => $request ->deadline,
            'solved' => false

        ]);

        return redirect('/customerReq')->with('success','Solicitud agregada!');
    }
}