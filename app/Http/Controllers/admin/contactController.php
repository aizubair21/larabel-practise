<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;

class contactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //__index method__//
    public function index()
    {
		$current_user_id = Auth::id();
        $contact_table = DB::table('contacts')->get();
        // dd($contact_table);

        return View('contact',['contact'=>$contact_table, 'current_user_id'=>$current_user_id]);

    }
}
