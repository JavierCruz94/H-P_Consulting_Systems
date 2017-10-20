<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showNewRequests()
    {
        return view ('pages.consultant.newReq');
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
