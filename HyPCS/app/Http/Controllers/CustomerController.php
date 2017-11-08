<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
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
        $idCustomer = \Auth::user()->id;

        $appointments = DB::table('requests')
            ->leftJoin('customers', 'requests.id_customer', '=', 'customers.id_customer')
            ->where([['requests.id_customer', '=', $idCustomer],
                ['schedule', '=', '1']])
            ->get();
        //echo $appointments;
        return view ('pages.customer.calendar')->with(['appointments' => $appointments]);
    }


    public function addReq(Request $request)
    {
        $numberOfConsultants = DB::table('consultants') ->count();

        if ($numberOfConsultants == 1) {
            $id_consultant = DB::table('consultants')
                ->pluck('id_consultant');
            $schedule = 1;
        }
        else {
            $id_consultant = [null];
            $schedule = 0;
        }

        RequestModel::create([
            'id_customer' => \Auth::user()->id,
            'id_admin' => 1,
            'schedule' => false,
            'id_consultant' => $id_consultant[0],
            'schedule' => $schedule,
            'subject' => $request->subject,
            'description' => $request -> description,
            'importance' => $request->importancia,
            'deadline' => $request ->deadline,
            'solved' => false,
            'date_scheduled' => date("2017/11/29"),
            'time_scheduled' => date("101112")

        ]);

        return redirect('/customerReq')->with('success','Solicitud agregada!');
    }
}