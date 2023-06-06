<?php

namespace App\Http\Controllers\client\firm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{ClientFirmDetails};


class FirmDetailsManageController extends Controller
{
    //

    public function firm_details_action(Request $request)
    {
           
           $check = ClientFirmDetails::where('client_id', Auth::guard('client')->user()->id)->first();

           /**
            * Add firm details
           */

           if($check == null){

                $request->validate([
                    'firm_name' => 'required|max:200',
                    'phone_area_code' => 'required|max:5',
                    'phone_no' =>  'required|max:10',
                    'fax_area_code' => 'max:5',
                    'fax_no' => 'max:20',
                    'address_line_1' => 'required',
                    'address_line_2' => 'required',
                    'city' => 'required|max:200',
                    'state' => 'required|max:200',
                    'zip' => 'required|max:200',
                ]);
                
                /**
                 * 
                */

                if($request->has('mail_check')){
                      $mail_address_line_1 = ($request->mail_address_line_1) ? ($request->mail_address_line_1) : "";
                      $mail_address_line_2 = ($request->mail_address_line_2) ? ($request->mail_address_line_2) : "";
                      $mail_city = ($request->mail_city) ? ($request->mail_city) : "";
                      $mail_state = ($request->mail_state) ? ($request->mail_state) : "";
                      $mail_zip = ($request->mail_zip) ? ($request->mail_zip) : "";
                }

                ClientFirmDetails::create([
                      'client_id' => Auth::guard('client')->user()->id,
                      'firm_name' => $request->firm_name,
                      'phone_no' => $request->phone_area_code."-".$request->phone_no,
                      'fax_no' => $request->fax_area_code."-".$request->fax_no,
                      'street_address_line_1' => $request->address_line_1,
                      'street_address_line_2' => $request->address_line_2,
                      'street_city' => $request->city,
                      'street_state' => $request->state,
                      'street_zip' => $request->zip,

                      'mailing_address_line_1' => $mail_address_line_1,
                      'mailing_address_line_2' => $mail_address_line_2,
                      'mailing_city' => $mail_city,
                      'mailing_state' => $mail_state,
                      'mailing_zip' => $mail_zip,
                ]);

           }

           /**
            * Edit Firm Details
           */

           else{

                $request->validate([
                    'firm_name' => 'required|max:200',
                    'phone_no' =>  'required|max:30',
                    'fax_no' => 'max:30',
                    'address_line_1' => 'required',
                    'address_line_2' => 'required',
                    'city' => 'required|max:200',
                    'state' => 'required|max:200',
                    'zip' => 'required|max:200',
                ]);

                ClientFirmDetails::where('client_id', Auth::guard('client')->user()->id)->update([
                        'firm_name' => $request->firm_name,
                        'phone_no' => $request->phone_no,
                        'fax_no' => $request->fax_no,
                        'street_address_line_1' => $request->address_line_1,
                        'street_address_line_2' => $request->address_line_2,
                        'street_city' => $request->city,
                        'street_state' => $request->state,
                        'street_zip' => $request->zip,

                        'mailing_address_line_1' => $request->mail_address_line_1,
                        'mailing_address_line_2' => $request->mail_address_line_2,
                        'mailing_city' => $request->mail_city,
                        'mailing_state' => $request->mail_state,
                        'mailing_zip' => $request->mail_zip,
                ]);
           }

           return redirect()->route('client.firm.details')->with('success', 'Successfully Saved');
    }
}