<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsultantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showNewRequests()
    {
        $id = \Auth::user()->id;


        $requests = DB::table('requests')
            ->leftJoin('customers', 'requests.id_customer', '=', 'customers.id_customer')
            ->leftJoin('consultants', 'requests.id_consultant', '=', 'consultants.id_consultant')
            ->where([['requests.id_consultant', '=', $id],
                ['requests.schedule', '=', '0']])
            ->get();

        return view ('pages.consultant.newReq') ->with(['requests' => $requests]);
    }

    public function scheduleRequestForm(Request $request)
    {
        $requisition = DB::table('requests')
            ->where('id_request', '=', $request->id_request)
            ->get();
        return view ('pages.consultant.schedReq') ->with(['requisitions' => $requisition]);
    }

    public function scheduleRequest(Request $request)
    {
        DB::table('requests')
            ->where('id_request', $request->id_request)
            ->update(['date_scheduled' => $request->daySched,
                'time_scheduled' => $request->timeSched,
                'schedule' => 1]);

        return redirect('/newReq')->with('success','Cita agendada!');
    }

    public function registerVisitForm()
    {
        return view ('pages.consultant.regVisit');
    }

    public function showCalendar()
    {
        $idConsultant = \Auth::user()->id;

        $appointments = DB::table('requests')
            ->leftJoin('customers', 'requests.id_customer', '=', 'customers.id_customer')
            ->where([['id_consultant', '=', $idConsultant],
                ['schedule', '=', '1']])
            ->get();
        //echo $appointments;
        return view ('pages.consultant.calendar')->with(['appointments' => $appointments]);
    }
}
