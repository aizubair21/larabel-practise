<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\contact;
use App\Models\profile;
use Illuminate\Support\Facades\Auth;

class profileController extends Controller
{
    public function index()
    {   
        $users = user::find(Auth::id());
        $profiles = profile::findOrFail(Auth::id());
        //dd($profiles);
        return view('profile', 
        [
            'profiles'=>$profiles,
            'users'=>$users,
        ]
        );

    }
}
