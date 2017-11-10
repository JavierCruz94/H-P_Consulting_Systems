<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Report;

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
                ['requests.schedule', '=', '0'],
                ['requests.solved', '=', '0']])
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
        $requests = DB::table('requests')
            ->where('id_consultant', 0)
            ->get();
        return view ('pages.consultant.regVisit')->with(['requests' => $requests]);
    }

    public function checkClientReq(Request $request)
    {
        //getting the ID of the consultant
        $idConsult = \Auth::user()->id;

        //getting the ID of the client searched
        $idClient = DB::table('customers')
            ->where('code', $request->codigo)
            ->orwhere('name', $request->codigo)
            ->orwhere('id_customer', $request->codigo)
            ->value('id_customer');

        //getting the requests not solved and assigned to the consultant
        $requests = DB::table('requests')
            ->where([['id_consultant', $idConsult],
                ['id_customer', $idClient],
                ['solved', 0]])
            ->get();

        return view('pages.consultant.regVisit') ->with(['requests' => $requests]);
    }

    public function showCalendar()
    {
        $idConsultant = \Auth::user()->id;

        $appointments = DB::table('requests')
            ->leftJoin('customers', 'requests.id_customer', '=', 'customers.id_customer')
            ->where([['id_consultant', '=', $idConsultant],
                ['schedule', '=', '1'],
                ['solved', '=', '0']])
            ->get();
        //echo $appointments;
        return view ('pages.consultant.calendar')->with(['appointments' => $appointments]);
    }

    public function generateReport(Request $request)
    {
        $requests = array();
        $checkboxes = $request->requests;
        foreach ($checkboxes as $checkbox)
        {
            $temp = DB::table('requests')
                ->where('id_request', $checkbox)
                ->get();

            array_push($requests, $temp);
        }

        $horas = array($request->arrivalHour, $request->departureHour);

        $comments = $request->comentarios;
        //var_dump($requests);

        $customer = DB::table('customers')->where('id_customer', $requests[0][0]->id_customer)->first();

        return view('pages.consultant.report')
            ->with(['requests'=> $requests, 'horas'=>$horas, 'comments'=>$comments, 'customer' => $customer]);

    }

    public function signReport(Request $request) {
        $originalArray = json_decode($request->id_request);

        Report::create([
            'comments' => $request->comments,
            'arrival_time' => $request->arrival_time,
            'finishing_time' => $request->finishing_time,
            'registeredBy' => 1
        ]);

        $id_report = DB::table('reports')
            ->where([['comments', $request->comments],
                ['arrival_time',$request->arrival_time],
                ['finishing_time',$request->finishing_time]])
            ->value('id_report');

        //var_dump($originalArray);

        foreach ($originalArray as $original) {
            DB::table('requests')
                ->where('id_request', $original[0]->id_request)
                ->update(['id_report' => $id_report,
                    'solved'=>1]);

        }

        return redirect('/regVisit')->with('success','Reporte Creado!');

    }
}
