<?php

namespace App\Http\Controllers\client\firm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{
       ClientFirmDetails, 
       ClientFirmStaff, 
       FirmBillingUnits, 
       TrustAccounts, 
       FinalizeWithPayments, 
       BankAccountSettings, 
       TrustAndOperatingCheck, 
       EvergreenRetainer, 
       TrustTransactionNumber,
       FirmEmailInvoices,
       FirmEmailInvoiceRemainders,
       FirmEmailEvergreenRetainers,
       FirmEmailDepositRequest,
       FirmInvoiceSettings
};

use Illuminate\Support\Facades\DB;

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

    public function account_page()
    {
           $states = DB::table('county_lists')->where('state_name', '!=', 'state_name')->get();
           $open_accounts = TrustAccounts::getDetailsByStatus('open');
           $close_accounts = TrustAccounts::getDetailsByStatus('close');
           $bank_details = BankAccountSettings::bankDetails(Auth::guard('client')->user()->id);
           $operating_checks = TrustAndOperatingCheck::trustDetails(Auth::guard('client')->user()->id);
           $retainer_details = EvergreenRetainer::retainerDetails(Auth::guard('client')->user()->id);
           $transaction_numbers = TrustTransactionNumber::trustTransaction(Auth::guard('client')->user()->id);
           $payment = FinalizeWithPayments::paymentDetails(Auth::guard('client')->user()->id);
           return view('client.firm.account.page', compact('states', 'payment', 'open_accounts', 'close_accounts', 'bank_details', 'operating_checks', 'retainer_details', 'transaction_numbers'));
    }

    /**
     *  Template page
    */

    public function template_page(){
           $invoice = FirmEmailInvoices::getInvoceDetails(Auth::guard('client')->user()->id);
           $invoice_remainders = FirmEmailInvoiceRemainders::getInvoceRemaindersDetails(Auth::guard('client')->user()->id);
           $evergreen_retainers = FirmEmailEvergreenRetainers::getEvergreenRetainersDetails(Auth::guard('client')->user()->id);
           $deposits = FirmEmailDepositRequest::getDepositRequestDetails(Auth::guard('client')->user()->id);

           $all_datas = [
              'invoice' => $invoice,
              'remainders' => $invoice_remainders,
              'retainers' => $evergreen_retainers,
              'deposits' => $deposits
           ];

           return view('client.firm.email.template_page', compact('all_datas'));
    }

    /**
     * Invoice Setting Page
    */

    public function invoice_setting_page(){
         $invoice = FirmInvoiceSettings::invoiceDetails(Auth::guard('client')->user()->id);
         return view('client.firm.invoice.page', compact('invoice'));
    }
}