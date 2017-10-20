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
        //$userAdmin= Auth::user();

        //$initials = $request->partnerName[0].$request->partnerName[1].$request->partnerName[2];
        //$initials = strtoupper($initials);

        // $year = date('Y');

        //$id = $initials . $year . random_int(0, 30);

        //$username = $id;


        RequestModel::create([
            'id_customer' => 3,
            'id_admin' => 1,
            'schedule' => false,
            'subject' => $request->subject,
            'description' => $request -> description,
            'importance' => 'baja',
            'deadline' => $request ->deadline,
            'solved' => false

        ]);

        return view('pages.customer.customerReq');

    }
}