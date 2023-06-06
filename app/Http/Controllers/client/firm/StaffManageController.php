<?php

namespace App\Http\Controllers\client\firm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{ClientFirmStaff};

class StaffManageController extends Controller
{
    //

    public function staff_add_action(Request $request)
    {
            $request->validate([
                'title' => 'required|not_in:Select A Title',
                'first_name' => 'required',
                'last_name' => 'required',
                'initials' => 'required',
                'role' => 'required|not_in:Select',
                'email' => 'required|email|max:100',
            ]);

            $time_entries = ($request->has('time_entries_unit')) ? 'yes' : 'no';
            $former_member = ($request->has('is_former_member')) ? 'yes' : 'no';

            ClientFirmStaff::create([
                  'client_id' => Auth::guard('client')->user()->id,
                  'name' => $request->title." ".$request->first_name." ".$request->last_name,
                  'role' => $request->initials." ".$request->role,
                  'email' => $request->email,
                  'phone_no' => $request->phone_area_code." ".$request->phone_no,
                  'mobile_no' => $request->mobile_area_code." ".$request->mobile_no,
                  'hourly_rate' => $request->hourly_rate,
                  'time_entries' => $time_entries,
                  'former_staff' => $former_member
            ]);

            return redirect()->back();
    }

    public function staff_delete($id)
    {
           ClientFirmStaff::find($id)->delete();
           return redirect()->back();
    }

    public function staff_edit($id)
    {
           $details = ClientFirmStaff::whereId($id)->first();

           if(Auth::guard('client')->user()->id == $details->client_id){
                return view('client.firm.staff_edit', compact('details'));
           }else{
               abort(403);
           }
    }

    public function staff_edit_action(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'initials' => 'required',
            'role' => 'required|not_in:Select',
            'email' => 'required|email|max:100',
        ]);

        $time_entries = ($request->has('time_entries_unit')) ? 'yes' : 'no';

        ClientFirmStaff::whereId($id)->update([
                'name' => $request->name,
                'role' => $request->initials." ".$request->role,
                'email' => $request->email,
                'phone_no' => $request->phone_no,
                'mobile_no' => $request->mobile_no,
                'hourly_rate' => $request->hourly_rate,
                'time_entries' => $time_entries,
        ]);

        return redirect()->route('client.firm.stuff-users');
    }
}