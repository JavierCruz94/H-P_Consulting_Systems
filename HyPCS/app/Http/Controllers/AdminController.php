<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Customer;

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


        $user = User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'role' => 'customer'
        ]);

        /*
        //insertar user a BD
        DB::table('users')->insert([
                'username' => $request->username,
                'password' => bcrypt($request->password),
                'email' => $request->email,
                'role' => 'customer'
        ]);
        */

        //encontrar su ID
        $userID = DB::table('users')->where('username', $request->username)->value('id_user');

        $customer = Customer::create([
            'id_customer' => $userID,
            'code' => $request->code,
            'name'=> $request->nombre,
            'registeredBy' => 1
        ]);
        /*
        DB::table('customers')->insert($customer);
*/
            echo 'exito';
    }
}
