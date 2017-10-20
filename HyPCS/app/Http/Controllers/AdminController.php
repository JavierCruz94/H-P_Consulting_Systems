<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Customer;
use App\Consultant;

class AdminController extends Controller
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
    public function index()
    {
        //$userAuth = auth()->user();
        //$userAuth = Auth::user();
        //$admin = $userAuth->userInfo;

        //return view('pages.admin.watch')->with(['user' => $userAuth, 'admin' => $admin]);
        /*
        $userAuth = auth()->user();
        $admin = $userAuth->userInfo;
        */
        $users = DB::table('customers')->get();

        return view('pages.admin.watch') ->with(['users' => $users]);//->with(['user' => $userAuth, 'admin' => $admin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.addClient');
    }

    public function storeClient(Request $request)
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
        $userID = DB::table('users')->where('username', $request->username)->value('id_user');

        Customer::create([
            'id_customer' => $userID,
            'code' => $request->code,
            'name'=> $request->nombre,
            'registeredBy' => 1
        ]);

        return redirect('/adminAddClient')->with('success','Cliente agregado!');
    }

    public function createConsultant() {
        return view('pages.admin.addConsultant');
    }

    public function storeConsultant(Request $request) {
        User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'role' => 'consultant'
        ]);

        //encontrar su ID
        $userID = DB::table('users')->where('username', $request->username)->value('id_user');

        Consultant::create([
            'id_consultant' => $userID,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'level' => $request->nivel,
            'registeredBy' => 1
        ]);

        return redirect('/adminAddConsultant')->with('success','Consultor agregado!');
    }
}
