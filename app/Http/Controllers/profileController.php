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
        //retrive user from user model
        $users = user::find(Auth::id());

        // $profiles = profile::findOrFail(Auth::id());
        // dd($users->profile->phone);
        return view('profile', 
        [
            //a user have a profile according our database relationship. so i can get user profile throught user.
            'profiles'=>$users->profile,
            'users'=>$users,
        ]
        );

    }
}
