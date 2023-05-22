<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddressSearch;
use App\Models\{PersonContact};
use Illuminate\Support\Facades\Auth;

class ContactsManageController extends Controller
{
    //

    public function page()
    {
            $totalContacts = PersonContact::totalPersonContact(Auth::guard('client')->user()->id);
            $allContacts = PersonContact::allPersonContact(Auth::guard('client')->user()->id);

            return view('client.contacts.index', compact('totalContacts', 'allContacts'));
    }

    public function search_address($search_for)
    {
            $result = AddressSearch::where('location', 'LIKE', '%'.$search_for.'%')->get();
            return response()->json($result);
    }

    public function search_address_by_id($search_id)
    {
            $result = AddressSearch::whereId($search_id)->first();
            return response()->json($result);
    }

    public function person_contact_add_action(Request $request)
    {

           $request->validate([
                'title' => 'required|not_in:Select A Title',
                'first_name' => 'required|max:200',
                'last_name' => 'required|max:200',
                'email' => 'required|email|max:200',
                'home_1' => 'required|max:200',
                'home_2' => 'required|max:200',
                'cell_1' => 'required|max:200',
                'cell_2' => 'required|max:200',
                'address_line_1' => 'required',
                'city' => 'required|max:200',
                'state' => 'required',
                'zip' => 'required|max:200',
           ]);

           $check = PersonContact::whereEmail($request->email)->first();

           if($check == null){

                PersonContact::create([
                        'client_id' => Auth::guard('client')->user()->id,
                        'name' => $request->title." ".$request->first_name." ".$request->last_name,
                        'email' => $request->email,
                        'home' => $request->home_1." ".$request->home_2,
                        'cell' => $request->cell_1." ".$request->cell_2,
                        'address_line_1' => $request->address_line_1,
                        'address_line_2' => $request->address_line_2,
                        'city' => $request->city,
                        'state' => $request->state,
                        'zip' => $request->zip,
                        'add_to_existing_org' => $request->add_to_existing_org,
                ]);

                return redirect()->back()->with('success', 'Successfully Saved');
           }else{
                return redirect()->back()->with('danger', 'This Contact Email has already Present');
           }
    }
}
