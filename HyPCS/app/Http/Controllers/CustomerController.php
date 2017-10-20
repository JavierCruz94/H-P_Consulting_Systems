<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Request;
class CustomerController extends Controller
{
    public function __construct()
    {
        //    $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.client.clientReq');
    }

    public function storeReq(Request $request)
    {
        //$userAdmin= Auth::user();

        //$initials = $request->partnerName[0].$request->partnerName[1].$request->partnerName[2];
        //$initials = strtoupper($initials);

        // $year = date('Y');

        //$id = $initials . $year . random_int(0, 30);

        //$username = $id;

        Request::create([
            'id_customer' => 1,
            'id_admin' => 1,
            'schedule' => null,
            'subject' => $request->subject,
            'description' => $request -> description,
            'importance' => $request -> importance,
            'deadline' => $request ->deadline,
            'solved' => null
        ]);

        echo exito;
    }

    public function startReq()
    {
        return view('pages.client.clientReq');
    }


}