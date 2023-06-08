<?php

namespace App\Http\Controllers\client\firm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{FirmBillingUnits};


class TimeAndActivitiesController extends Controller
{
    //

    public function firm_billing_action(Request $request)
    {
            $request->validate([
                'time_entries' => 'required|not_in:Select',
                'custom_time' => 'required_if:time_entries,==,custom'
            ]);

            $check = FirmBillingUnits::where('client_id', Auth::guard('client')->user()->id)->first();

            if($request->time_entries == "custom"){
              $time = ($request->custom_time != null) ? ($request->custom_time) : ($request->time_entries);
            }
            else{
                $time = $request->time_entries;
            }

            $custom_or_not = ($request->time_entries == "custom") ? "custom" : "normal";
        
            if($check == null){
                     FirmBillingUnits::create([
                        'client_id' => Auth::guard('client')->user()->id,
                        'time' => $time,
                        'custom_or_not' => $custom_or_not,
                     ]);
            }
            else{
                    FirmBillingUnits::where('client_id', Auth::guard('client')->user()->id)->update([
                        'time' => $time,
                        'custom_or_not' => $custom_or_not,
                    ]);
            }

            return redirect()->back()->with('success', 'Successfully Saved');
    }
}