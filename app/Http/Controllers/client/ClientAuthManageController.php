<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Clients};
use Illuminate\Support\Facades\Auth;

class ClientAuthManageController extends Controller
{
    //

    /**
     * Registration
     */

    public function register()
    {
           return view('client.register');
    }
    
    public function register_action(Request $request)
    {
           $request->validate([
                 'name' => 'required',
                 'email' => 'required|email',
                 'phone' => 'required|integer',
                 'country' => 'required',
                 'city' => 'required',
                 'password' => 'required|min:5|max:30',
                 'conf_password' => 'required|same:password',
           ]);

           $check_user = Clients::whereEmail($request->email)->first();

           if($check_user == null){
           Clients::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'country' => $request->country,
                'city' => $request->city,
                'password' => bcrypt($request->password),
           ]);

           return redirect()->back()->with('success', 'Successfully Registered');
         }
         else{
           return redirect()->back()->with('warning', 'You have already Registered with us!');
         }
    }


    /**
     * login
     */

    public function login()
    {
           return view('client.login');
    }

     public function login_action(Request $request)
     {
          $this->validate($request, [
              'email'   => 'required|email',
              'password' => 'required|min:6'
          ]);
  
          if(Auth::guard('client')->attempt(['email' => $request -> input('email'), 'password' => $request -> input('password')])){
              return redirect()->route('client.dashboard');
            //   dd(Auth::guard('client')->user()->id);
          }
          else{
              return redirect()->route('client.login')->with('danger', 'Email or Password is Incorrect');
          }
     }

     /**
      * dashboard 
     */

     public function dashboard()
     {
             return view('client.matter.index');
     }

     /**
      * logout
     */

     public function logout(Request $request){
        Auth::guard('client')->logout();
        return redirect()->route('client.login')->with('success', 'Succesfully Logedout');
     }
}