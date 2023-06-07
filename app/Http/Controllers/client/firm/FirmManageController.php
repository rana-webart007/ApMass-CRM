<?php

namespace App\Http\Controllers\client\firm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{ClientFirmDetails, ClientFirmStaff, FirmBillingUnits};

class FirmManageController extends Controller
{
    //

    public function firm_details()
    {
           $check = ClientFirmDetails::where('client_id', Auth::guard('client')->user()->id)->first();

           if($check != null){
                 $details = $check;
                 $type = "edit";
           }
           else{
                $details = [];
                $type = "add";
           }

           return view('client.firm.details', compact('details', 'type'));
    }


    public function firm_stuff_users()
    {
           $all_staffs = ClientFirmStaff::all_clients();
           $former_staffs = ClientFirmStaff::former_clients();

           return view('client.firm.stuff_users', compact('all_staffs', 'former_staffs'));
    }

    public function time_and_activities()
    {
           $billings = FirmBillingUnits::where('client_id', Auth::guard('client')->user()->id)->first();
           return view('client.firm.time_activities', compact('billings'));
    }

    public function activity_create()
    {
           return view('client.firm.activity.activity_create');
    }
}