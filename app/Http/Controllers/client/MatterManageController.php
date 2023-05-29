<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{AreaOfLaw, MatterType, ClientRoles, PersonContact, Matters};

class MatterManageController extends Controller
{
    //

    public function page()
    {
        $matters = Matters::getAllMAtters();
        return view('client.matter.index', compact('matters'));
    }

    public function matter_add()
    {
           $states = DB::table('county_lists')->where('state_abbr', '!=', 'state_abbr')->get();
           $areas = AreaOfLaw::allLaws();
           $contacts = PersonContact::where('client_id', Auth::guard('client')->user()->id)->orderBy('name')->get();

           return view('client.matter.add', compact('states', 'areas', 'contacts'));
    }

    public function matter_get_by_area($area)
    {
            $data = MatterType::getTypesByAreaName(trim($area));
            return response()->json($data);
    }

    public function get_client_role(Request $request)
    {
            $area = $request->area;
            $matter = $request->matter;
            $data = ClientRoles::getTypesByAreaAndMatterName(trim($area), trim($matter));
            return response()->json($data);
    }

    public function add_action(Request $request)
    {
        // dd($request->all());

           $request->validate([
                 'state_abbr' => 'required',
                 'law_area' => 'required|not_in:Select an area of law',
                 'matter_type' => 'required',
                 'internal_preference' => 'required',
                 'client_role' => 'required',
                 'hourly_rate' => 'required',
           ]);

           $rand_id = substr(md5(date("d-m-Y").time()), 0, 35);

           Matters::create([
                'matter_id' => $rand_id,
                'added_by' => Auth::guard('client')->user()->id,
                'state_abbr' => $request->state_abbr,
                'matter_area' => $request->law_area,
                'matter_type' => $request->matter_type,
                'internal_ref' => $request->internal_preference,
                'matter_descp' => $request->matter_description,
                'client_role' => $request->client_role,
                'attorney_responsible' => $request->attorney_responsible,
                'person_assisting' => $request->person_assisting,
                'originating_attorney' => $request->originating_attorney,
                'client' => $request->client,
                'debtors' => $request->debtors,
                'billing_type' => $request->billing_types,
                'fee_estimate' => $request->fee_estimate_billing,
                'contingency' => $request->contingency_percent,
                'bulling_units' => $request->billing_units,
                'custom_minutes' => $request->custom_billing_units,
                'hourly_rates' => $request->hourly_rate,
                'override_rate_for_all' => $request->override_rate_for_all,
                'override_indicidual_name' => $request->override_indicidual_name,
                'override_indicidual_rate' => $request->override_indicidual_rate,
                'late_payment' => $request->late_payment,
                'grace_period' => $request->grace_period,
                'custom_days' => $request->grace_period_days,
                'custom_interest' => $request->grace_period_interest,
                'calculate_interest_from' => $request->grace_period_interest_from,
                'cc_emails' => $request->cc_emails,
                'bcc_emails' => $request->bcc_emails,
                'invoice_templates' => $request->invoice_template,
                'invoice_title' => $request->invoive_title,
                'custom_invoice_title' => $request->custom_invoice_title_field,
                'invoice_sub_title' => $request->invoive_sub_title,
                'custom_invoice_sub_title' => $request->custom_invoice_sub_title_field,
                'notes' => $request->notes,
                'einvoice' => $request->einvoice,
                'surcharge' => $request->surcharge_check,
                'surcharge_type' => $request->surcharge_type,
                'surcharge_percent_amount' => $request->surcharge_percent_or_amount,
                'surcharge_apply_to' => $request->surcharge_apply_to,
                'surcharge_label_on_invoice' => $request->surcharge_liable,
           ]);

           return redirect()->route('client.matters.page')->with('success', 'Successfully Saved');
    }
}
