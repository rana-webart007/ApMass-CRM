<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Admin};

class AdminAuthController extends Controller
{
    //

    public function login_page()
    {
           return view('admin.auth.login');
    }

    public function login_action(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::guard('admin')->attempt(['email' => $request -> input('email'), 'password' => $request -> input('password')])){
            return redirect()->route('admin.dashboard');
            // dd(Auth::guard('admin')->user()->id);
        }
        else{
            return redirect()->route('admin.login')->with('danger', 'Email or Password is Incorrect');
        }
    }


     /**
      * dashboard 
     */

     public function dashboard()
     {
             return view('admin.auth.dashboard');
     }

     /**
      * logout
     */

     public function logout(Request $request){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success', 'Succesfully Logedout');
     }
}
