<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class userController extends Controller

{
    //index method
    public function index(Request $request)
    {
        if ($this->middleware('auth')) {
            return redirect()->route('dashboard');
        } else {
            return view('welcome');
        }
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:10'],
            'email' => ['email', 'required', 'max:50']
        ]);
        return back()->with('alert', 'form submitted..');
    }

    public function store()
    {
        //write log into suerSubmit log page.
        Log::channel('userSubmit')->info('user submit.');

        //redirect to back
        return redirect()->back();
    }

    public function test(Request $request)
    {
        if ($request->password != '') {
            $result = Hash::make($request->password);
            $main = Hash::needsRehash($result);
            return redirect()->back()->with(['result' => $result, 'main' => $request->password]);
        } else {
            return redirect()->back()->with(['has_error' => 'Write any thing into input puilt to run hash.']);
        }
    }

    public function hash_test(Request $request)
    {
        $hashed = Hash::make('amimul');
        return response()->view('diposit');
    }

    public function change_password(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required', 'max:32', 'min:8'],
            'password_confirmation' => ['required'],
        ]);
        $user = Auth::user();
        if (Hash::check($request->current_password, $user->password)) {
            $password = Hash::make($request->new_password);
            $user->password = $password;
            $user->save();

            return redirect()->back()->with('success', 'Password successfully changed');
        } else {
            return redirect()->back()->with("error", "Opps !, Your Current Password Is't Correct");
        }
    }

    public function data_inserted()
    {
    }
}
