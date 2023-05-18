<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddressSearch;

class AdminContactsManageController extends Controller
{
    //

    public function contact_page()
    {
           $all = AddressSearch::allAddress();
           $total = AddressSearch::totalAddress();
           return view("admin.contact.page", compact('all', 'total'));
    }

    public function contact_add_address()
    {
          return view("admin.contact.contact_add_address");
    }

    public function contact_add_address_action(Request $request)
    {
        $request->validate([
            'area_location' => 'required',
            'address_line_1' => 'required',
            'state' => 'required|max:200',
            'city' => 'required|max:200',
            'zip_code' => 'required|max:200',
        ]);

        $chek = AddressSearch::whereLocation($request->area_location)->first();

        if($chek == null){
              $rand_id = substr(md5(date("d-m-Y")."_".time()), 0, 30);
            
              AddressSearch::create([
                   'address_id' => $rand_id,
                   'location' => $request->area_location,
                   'address_line_1' => $request->address_line_1,
                   'address_line_2' => $request->address_line_2,
                   'state' => $request->state,
                   'city' => $request->city,
                   'zip' => $request->zip_code,
              ]);

              return redirect()->back()->with('success', 'Successfully Saved');
        }else{
              return redirect()->back()->with('danger', 'This Address Already exists');
        }
    }

    public function contact_address_delete($id)
    {
           AddressSearch::find($id)->delete();
           return redirect()->back()->with('success', 'Successfully Deleted');
    }

    public function contact_edit_address($id)
    {
           $details = AddressSearch::where('address_id', $id)->first();
           return view("admin.contact.edit_address", compact('details'));
    }

    public function contact_edit_address_action(Request $request, $id)
    {
        $request->validate([
            'area_location' => 'required',
            'address_line_1' => 'required',
            'state' => 'required|max:200',
            'city' => 'required|max:200',
            'zip_code' => 'required|max:200',
        ]);

        $chek = AddressSearch::whereLocation($request->area_location)->where('address_id', '!=', $id)->first();

        if($chek == null){
            AddressSearch::where('address_id', $id)->update([
                'location' => $request->area_location,
                'address_line_1' => $request->address_line_1,
                'address_line_2' => $request->address_line_2,
                'state' => $request->state,
                'city' => $request->city,
                'zip' => $request->zip_code,
           ]);

           return redirect()->back()->with('success', 'Successfully Saved');
        }else{
            return redirect()->back()->with('danger', 'This Address Already exists');
        }
    }
}
