<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {   

        if ($request->email == "aizubair21@gmail.com") {
                   
            $validated = $request->validate ([
                'name'=>['required','max:15','min:5'],
                'email'=>['required','max:30'],
                'phone'=>['max:11','min:10'],
                'info'=>['nullable',]
            ]);
            return $next($request);
        }else {
            $roll = $request->userRoll;
            if ($request->email == ""){
                 //__validate data with validator custome code__//
            $validated = $request->validate ([
                'name'=>['required','max:15','min:5'],
                'email'=>['required','max:30'],
                'phone'=>['max:11','min:10'],
                'info'=>['nullable',]
            ]);
            }else {
                return redirect()->back()->with("alrt", $request->email. " not match with our condition.")->withInput();
            }
        
           

            //__send a response to view page. to show what's wrong. except() method stop buinding specific input to response__//
                //return redirect()->route('contact.us')->withInput($request->except('email'));

            //__send response to view page. with all input__//
                //return redirect()->to('/contact/us')->withInput()->with("err", $roll." ! can't access this page.");

            //it able to call back() method to redirect previous route.
                //return back()->withInput()->with("err", $roll." ! can't access this page.");

            // not possible to send response with view method
                //return view('contact')->with("err", $roll." ! can't access this page.");
            
            //__Return to previous page with an alert on top of form_//
               

            //__  __///

        }


    }
}
