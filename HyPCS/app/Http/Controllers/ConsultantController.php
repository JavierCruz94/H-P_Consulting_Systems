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
            ->where([
                ['schedule', '=', '1'],
                ['requests.id_consultant', '=', $id]])
            ->get();

        return view ('pages.consultant.newReq') ->with(['requests' => $requests]);
    }

    public function scheduleRequestForm()
    {
        return view ('pages.consultant.schedReq');
    }

    public function registerVisitForm()
    {
        return view ('pages.consultant.regVisit');
    }

    public function showCalendar()
    {
        return view ('pages.consultant.calendar');
    }
}
