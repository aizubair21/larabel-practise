<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Log;


class userController extends Controller

{   
    //index method
    public function index(Request $request)
    {
       if ($this->middleware('auth')) {
           return redirect()->route('dashboard');
       }else {
           return view('welcome');
       }
    }
    public function create(Request $request)
    {
        $validated = $request->validate([
            'name'=>['required','min:10'],
            'email'=>['email','required','max:50']
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
}