<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Customer;
use App\Consultant;

class AdminController extends Controller
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
    public function watchCustomers()
    {
        $customers = DB::table('customers')->get();

        return view('pages.admin.watch') ->with(['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addCustomerForm()
    {
        return view('pages.admin.addCustomer');
    }

    public function addCustomer(Request $request)
    {
        //$userAdmin= Auth::user();

        //$initials = $request->partnerName[0].$request->partnerName[1].$request->partnerName[2];
        //$initials = strtoupper($initials);

       // $year = date('Y');

        //$id = $initials . $year . random_int(0, 30);

        //$username = $id;


        User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'role' => 'customer'
        ]);

        //encontrar su ID
        $userID = DB::table('users')->where('username', $request->username)->value('id');

        Customer::create([
            'id_customer' => $userID,
            'code' => $request->code,
            'name'=> $request->nombre,
            'registeredBy' => 1
        ]);

        return redirect('/adminAddCustomer')->with('success','Cliente agregado!');
    }

    public function addConsultantForm() {
        return view('pages.admin.addConsultant');
    }

    public function addConsultant(Request $request) {
        User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'role' => 'consultant'
        ]);

        //encontrar su ID
        $userID = DB::table('users')->where('username', $request->username)->value('id');

        Consultant::create([
            'id_consultant' => $userID,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'level' => $request->nivel,
            'registeredBy' => 1
        ]);

        return redirect('/adminAddConsultant')->with('success','Consultor agregado!');
    }

    public function getRequestsConsultants() {
        $requests = DB::table('requests')
            ->join('customers', 'requests.id_customer', '=', 'customers.id_customer')
            ->where('schedule', '=', '0')
            ->get();
        $consultants = DB::table('consultants')
            ->select('consultants.id_consultant', 'consultants.firstname', DB::raw('count(requests.id_consultant) as cantidad'))
            ->leftjoin('requests', 'consultants.id_consultant', '=', 'requests.id_consultant')
            ->groupby('consultants.id_consultant')
            ->get();

        $requestsAssigned = DB::table('requests')
            ->join('customers', 'requests.id_customer', '=', 'customers.id_customer')
            ->join('consultants', 'requests.id_consultant', '=', 'consultants.id_consultant')
            ->where('schedule', '=', '1')
            ->get();
        return view('pages.admin.assignReq') ->with(['consultants' => $consultants, 'requests' => $requests, 'requestsAssigned' => $requestsAssigned]);
    }

    public function assignRequestToConsultant(Request $request) {

        DB::table('requests')
            ->where('id_request', $request->id_request)
            ->update(['id_consultant' => $request->selectCons, 'schedule' => 1]);


        return redirect('/adminAssignReq')->with('success','Consultor asignado!');
    }

    public function changeConsultant(Request $request) {
       DB::table('requests')
            ->where('id_request', $request->id_request)
            ->update(['id_consultant' => null, 'schedule' => 0]);


        return redirect('/adminAssignReq')->with('success','Vuelva a asignar el consultor');
    }
}
