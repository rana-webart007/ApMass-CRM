<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Admin, AreaOfLaw};

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
             $law_areas = AreaOfLaw::paginate(10);
             $total_area = count(AreaOfLaw::get());
             return view('admin.auth.dashboard', compact('law_areas', 'total_area'));
     }

     /**
      * Forgot Password 
     */

     public function forgot_password_page()
      {
            return view('admin.auth.forgot_password');
      }

      public function forgot_password_action(Request $request)
      {
            $request->validate([
                  'email' => 'required|email|max:200',
                  'new_password' => 'required|max:50',
                  'conf_password' => 'required|max:50|same:new_password',
            ],[
                    'conf_password.same' => 'Confirm Password & New Password Must be Same'
            ]);
  
            $check = Admin::whereEmail($request->email)->first();
            if($check != null){
                      Admin::whereEmail($request->email)->update([
                            'password' => bcrypt($request->new_password),
                      ]);
  
                      return back()->with('success', 'Password Successfully Changed.');
  
            }else{
                      return back()->with('danger', 'Sorry! You Wrong Credentials');
            }
      }

     /**
      * logout
     */

     public function logout(Request $request){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success', 'Succesfully Logedout');
     }
}
