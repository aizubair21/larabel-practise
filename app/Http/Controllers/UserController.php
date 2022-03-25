<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class UserController extends Controller
{
    //show method. show method use to view any html file
    public function show(Request $request)
    {
        return view('contact', ['request'=>$request]);
    }

    //create method. use to open any htmo form data.
    public function create(Request $request)
    {
        //__validate data__//
        $validated = $request->validate ([
            'name'=>['required','max:15','min:5'],
            'email'=>['required','max:30'],
            'phone'=>['max:11','min:10'],
            'info'=>['nullable',]
        ]);


        //__make data array__//
        $data = [];
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;

        // Store a piece of data in the session...
        session(['data' => $data]);

        return view('form', ['request'=>$request]);
    }

    //__index method__///
    public function index(Request $request)
    {   
        $data = [];
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;

        // Store a piece of data in the session...
        session(['data' => $data]);


        return redirect()->back()->withInput()->with('success_session','data inserted to session.');
    }
}
