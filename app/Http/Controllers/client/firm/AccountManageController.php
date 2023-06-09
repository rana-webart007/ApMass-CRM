<?php

namespace App\Http\Controllers\client\firm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\{TrustAccounts, BankAccountSettings, TrustAndOperatingCheck};
use Illuminate\Support\Facades\DB;

class AccountManageController extends Controller
{
    //

    public function trust_add_action(Request $request)
    {

        if($request->matters_states != "All States"){
           $check = TrustAccounts::where('client_id', Auth::guard('client')->user()->id)->where('trust_account_name', $request->trust_account_name)->first();
           
           if($check == null){
               $rand = Str::random(50);

               TrustAccounts::create([
                    'client_id' => Auth::guard('client')->user()->id,
                    'trust_account_id' => $rand,
                    'trust_account_name' => $request->trust_account_name,
                    'display_name' => $request->display_name,
                    'bank_name' => $request->bank_name,
                    'branch' => $request->branch,
                    'state' => $request->matters_states
               ]);

               return redirect()->back()->with('success', 'Successfully Saved');
           }
           else{
               return redirect()->back()->with('warning', 'Trust Account Already Exists');
           }
        }
        else{
            return redirect()->back()->with('danger', 'You should select a Valid State');
        }
    }

    public function account_delete($id)
    {
           TrustAccounts::find($id)->delete();
           return redirect()->back()->with('danger', 'Deleted');
    }

    public function account_edit_page($id)
    {
           $details = TrustAccounts::specificAccountDetails($id);
           $states = DB::table('county_lists')->where('state_name', '!=', 'state_name')->get();
           return view('client.firm.account.trust_edit', compact('details', 'states'));
    }

    public function account_edit_action(Request $request, $id)
    {
          TrustAccounts::editTrustAccounts($id, $request->trust_account_name, $request->display_name, $request->bank_name, $request->branch, $request->matters_states);
          return redirect()->route('client.firm.account.page')->with('success', 'Successfully Saved');
    }

    public function status_change($id, $status)
    {
           TrustAccounts::statusChange($id, $status);
           return redirect()->route('client.firm.account.page')->with('success', 'Successfully Saved');
    }

    /**
     *  Bank account settings
    */

    public function bank_account_settings(Request $request)
    {
           $check = BankAccountSettings::bankDetails(Auth::guard('client')->user()->id);
           
           $pdf_trust_deposite = ($request->pdf_trust_deposite == null) ? "no" : "yes";
           $pdf_trust_payment = ($request->pdf_trust_payment == null) ? "no" : "yes";
           $pdf_operating_payment = ($request->pdf_operating_payment == null) ? "no" : "yes";
           $pdf_trust_transfer = ($request->pdf_trust_transfer == null) ? "no" : "yes";

           if($check == null){
                BankAccountSettings::create([
                      'client_id' => Auth::guard('client')->user()->id,
                      'trust_account_id' => $request->state_found,
                      'pdf_trust_deposite' => $pdf_trust_deposite,
                      'pdf_trust_payment' => $pdf_trust_payment,
                      'pdf_operating_payment' => $pdf_operating_payment,
                      'pdf_trust_transfer' => $pdf_trust_transfer,
                ]);

                return redirect()->back()->with('success', 'Bank Account Saved Successfully');
           }
           else{
                    BankAccountSettings::where('client_id', Auth::guard('client')->user()->id)->update([
                        'trust_account_id' => $request->state_found,
                        'pdf_trust_deposite' => $pdf_trust_deposite,
                        'pdf_trust_payment' => $pdf_trust_payment,
                        'pdf_operating_payment' => $pdf_operating_payment,
                        'pdf_trust_transfer' => $pdf_trust_transfer,
                    ]);

                return redirect()->back()->with('success', 'Bank Account Saved Successfully');
           }
    }

    /**
     * Trust & Operating Checks
    */

    public function trust_operating_checks(Request $request)
    {
            $check = TrustAndOperatingCheck::trustDetails(Auth::guard('client')->user()->id);  

            $trust_check_print = ($request->trust_check_print == null) ? "no" : "yes";
            $trust_check_style = ($request->trust_check_style == null) ? "no" : $request->trust_check_style;
            $trust_printing_method = ($request->trust_printing_method == null) ? "no" : $request->trust_printing_method;
            $operating_check_print = ($request->operating_check_print == null) ? "no" : "yes";
            $vendor_address_on_check = ($request->vendor_address_on_check == null) ? "no" : "yes";
            $operating_check_style = ($request->operating_check_style == null) ? "no" : $request->operating_check_style;
            $operating_printing_method = ($request->operating_printing_method == null) ? "no" : $request->operating_printing_method;
            
            if($check == null){
                TrustAndOperatingCheck::create([
                     'client_id' => Auth::guard('client')->user()->id,
                     'account' => $request->account,
                     'trust_check_print' => $trust_check_print,
                     'trust_check_style' => $trust_check_style,
                     'trust_printing_method' => $trust_printing_method,
                     'operating_check_print' => $operating_check_print,
                     'vendor_address_on_check' => $vendor_address_on_check,
                     'operating_check_style' => $operating_check_style,
                     'operating_printing_method' => $operating_printing_method,
                ]);
            }
            else{
                TrustAndOperatingCheck::where('client_id', Auth::guard('client')->user()->id)->update([
                    'account' => $request->account,
                    'trust_check_print' => $trust_check_print,
                    'trust_check_style' => $trust_check_style,
                    'trust_printing_method' => $trust_printing_method,
                    'operating_check_print' => $operating_check_print,
                    'vendor_address_on_check' => $vendor_address_on_check,
                    'operating_check_style' => $operating_check_style,
                    'operating_printing_method' => $operating_printing_method,
               ]);

            }

            return redirect()->back()->with('success', 'Checks saved');
    }
}