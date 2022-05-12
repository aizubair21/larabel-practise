<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\contact;
use App\Models\profile;
use Illuminate\Database\DBAL\TimestampType;

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
        $contact_table = user::find(Auth::id())->contact()->simplePaginate(10);
        // dd($contact_table);

        return View('contact',[

            'contact'=>$contact_table,
        
        ]);
    }

    //__create method. add a new contact__//
    public function store(Request $request)
    {   

        $request->validate([
            'first_name'=>['required'],
            'last_name'=>['max:10'],
            'phone'=>['required','max:11','min:10'],
            'email'=>['email']

        ]);
       $contacts = contact::insert([
            'user_id'=>Auth::id(),
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'group'=>$request->group,
        ]);
        return redirect()->route('contact')->with(['success','New contact generated.']);
    }

    //_index __//
    public function create(Request $request, $id)
    {
        $contact_table =contact::where('id',$id)->get();
        return view('contact.updateContact',['contact'=>$contact_table]);
    }

    // updte contact method
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name'=>['required'],
            'last_name'=>['max:10'],
            'phone'=>['required','max:11'],
            'email'=>['email'],

        ]);

       contact::where('id',$id)->update([
        'first_name'=>$request->first_name,
        'last_name'=>$request->last_name,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'address'=>$request->address,
        'group'=>$request->group
    
        ]);
        // dd($request->group);

        return redirect()->back()->with('success','Contact Updated.');
    }

    // delete contact method 
    public function destroy($id)
    {
       contact::where('id',$id)->delete();
        return redirect()->back()->with('success','Successfully Deleted !');
    }
}
