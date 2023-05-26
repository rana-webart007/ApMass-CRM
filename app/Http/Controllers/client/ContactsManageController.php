<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddressSearch;
use App\Models\{PersonContact, BusinessContacts, BusinessContactDetails};
use Illuminate\Support\Facades\Auth;

class ContactsManageController extends Controller
{
    //

    public function page()
    {
            $totalContacts = PersonContact::totalPersonContact(Auth::guard('client')->user()->id);
            $allContacts = PersonContact::allPersonContact(Auth::guard('client')->user()->id);
            $existing_org = BusinessContacts::existingOrganization(Auth::guard('client')->user()->id);

            return view('client.contacts.index', compact('totalContacts', 'allContacts', 'existing_org'));
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

    /**
     * Person Contact 
    */

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

              if($request->req == null){
                return redirect()->back()->with('success', 'Successfully Saved');
              }else{
                session()->flash('ajax_success', 'Data saved successfully.');
                return response()->json(['data' => 'success']);
              }
           }else{
                return redirect()->back()->with('danger', 'This Contact Email has already Present');
           }
    }

    public function person_delete($id)
    {
            PersonContact::find($id)->delete();
            return redirect()->back()->with('success', 'Successfully Deleted');
    }

    public function person_edit_page($id)
    {
            $detail = PersonContact::whereId($id)->first();
            return view('client.contacts.person_edit', compact('detail'));
    }

    public function person_edit_action(Request $request, $id)
    {
           $request->validate([
                'name' => 'required',
                'email' => 'required|email|max:200',
                'home' => 'required',
                'cell' => 'required',
                'address_line_1' => 'required',
                'city' => 'required|max:200',
                'state' => 'required',
                'zip' => 'required|max:200',
           ]);

           PersonContact::whereId($id)->update([
                 'name' => $request->name,
                 'email' => $request->email,
                 'home' => $request->home,
                 'cell' => $request->cell,
                 'address_line_1' => $request->address_line_1,
                 'address_line_2' => $request->address_line_2,
                 'city' => $request->city,
                 'state' => $request->state,
                 'zip' => $request->zip,
           ]);

           return redirect()->route('client.contacts.page')->with('success', 'Successfully Saved');
    }

    /**
     * Business Contact
    */

    public function business_contact_add_action(Request $request)
    {
        // dd($request->all());

            $request->validate([
                 'name' => 'required|max:200',
                 'company_type' => 'required|not_in:Select..',
                 'email' => 'required|email|max:200',
                 'phone_1' => 'required|max:20',
                 'phone_2' => 'required|max:20',
                 'fax_1' => 'required|max:20',
                 'fax_2' => 'required|max:20',
                 'address_line_1' => 'required',
                 'city' => 'required|max:200',
                 'state' => 'required|max:200',
                 'zip' => 'required|max:200',
            ]);

            $check = BusinessContacts::whereEmail($request->email)->first();

            if($check == null){
                     $business_contacts = BusinessContacts::create([
                        'client_id' => Auth::guard('client')->user()->id,
                        'company_name' => $request->name,
                        'company_type' => $request->company_type,
                        'email' => $request->email,
                        'phone' => $request->phone_1." ".$request->phone_2,
                        'fax' => $request->fax_1." ".$request->fax_2,
                        'address_line_1' => $request->address_line_1,
                        'address_line_2' => $request->address_line_2,
                        'city' => $request->city,
                        'state' => $request->state,
                        'zip' => $request->zip,
                     ]);

                     /**
                      * Business Contact Details 
                     */

                     if($request->has('more_email')){
                            foreach($request->more_title as $title){
                                  $details_title[] = $title;
                            }

                            foreach($request->more_first_name as $fn){
                                $details_fn[] = $fn;
                            }

                            foreach($request->more_last_name as $ln){
                                $details_ln[] = $ln;
                            }

                            foreach($request->more_email as $more){
                                $details_email[] = $more;
                            }

                            foreach($request->more_home_1 as $home1){
                                $details_home1[] = $home1;
                            }

                            foreach($request->more_home_1 as $home2){
                                $details_home2[] = $home2;
                            }

                            foreach($request->more_cell_1 as $cell1){
                                $details_cell1[] = $cell1;
                            }

                            foreach($request->more_cell_2 as $cell2){
                                $details_cell2[] = $cell2;
                            }

                            foreach($request->more_business_role as $role){
                                $details_role[] = $role;
                            }

                        for($i = 0; $i<count($details_email); $i++){
                            $contact_details = BusinessContactDetails::create([
                                'client_id' => Auth::guard('client')->user()->id,
                                'org_id' => $business_contacts->id,
                                'name' => $details_title[$i]." ".$details_fn[$i]." ".$details_ln[$i],
                                'email' => $details_email[$i],
                                'home' => $details_home1[$i]." ".$details_home2[$i],
                                'cell' => $details_cell1[$i]." ".$details_cell2[$i],
                                'business_role' => $details_role[$i],
                          ]);
                        }
                     }

                     return redirect()->back()->with('success', 'Successfully Saved');
            }else{
                return redirect()->back()->with('danger', 'This Contact Email has already Present');
            }

    }
}
