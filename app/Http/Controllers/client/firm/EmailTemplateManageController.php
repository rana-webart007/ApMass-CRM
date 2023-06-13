<?php

namespace App\Http\Controllers\client\firm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{
    FirmEmailInvoices,
    FirmEmailInvoiceRemainders,
    FirmEmailEvergreenRetainers,
    FirmEmailDepositRequest
};

class EmailTemplateManageController extends Controller
{

    /**
     * Email Invoice..
    */

    public function invoice_action(Request $request) {
              
              $check = FirmEmailInvoices::getInvoceDetails(Auth::guard('client')->user()->id);

              $send_copy_of_email_to_user = ($request->has('send_copy_of_email_to_user')) ? 'yes' : 'no';
              $attach_invoice_to_email = ($request->has('attach_invoice_to_email')) ? 'yes' : 'no';
              
              if($check == null){
                   FirmEmailInvoices::create([
                         'client_id' => Auth::guard('client')->user()->id,
                         'email_subject' => $request->email_subject,
                         'inv_email_body' => $request->inv_email_body,
                         'email_body_placeholder' => $request->email_body_placeholder,
                         'send_copy_of_email_to_user' => $send_copy_of_email_to_user,
                         'attach_invoice_to_email' => $attach_invoice_to_email
                   ]);
              }
              else{
                FirmEmailInvoices::where('client_id', Auth::guard('client')->user()->id)->update([
                        'email_subject' => $request->email_subject,
                        'inv_email_body' => $request->inv_email_body,
                        'email_body_placeholder' => $request->email_body_placeholder,
                        'send_copy_of_email_to_user' => $send_copy_of_email_to_user,
                        'attach_invoice_to_email' => $attach_invoice_to_email
                ]);
              }

              return redirect()->back()->with('success', 'Invoice Successfully Saved');
    }

    /**
     * Invoice Remainder
    */

    public function invoice_remainder_action(Request $request){
        $check = FirmEmailInvoiceRemainders::getInvoceRemaindersDetails(Auth::guard('client')->user()->id);

        $send_copy_of_email_to_user = ($request->has('send_copy_of_email_to_user')) ? 'yes' : 'no';
        $attach_invoice_to_email = ($request->has('attach_invoice_to_email')) ? 'yes' : 'no';
        
        if($check == null){
            FirmEmailInvoiceRemainders::create([
                  'client_id' => Auth::guard('client')->user()->id,
                  'email_subject' => $request->email_subject,
                  'invoice_email_body' => $request->invoice_email_body,
                  'email_body_placeholder' => $request->email_body_placeholder,
                  'notes' => $request->notes,
                  'send_copy_of_email_to_user' => $send_copy_of_email_to_user,
                  'attach_invoice_to_email' => $attach_invoice_to_email
            ]);
        }
        else{
          FirmEmailInvoiceRemainders::where('client_id', Auth::guard('client')->user()->id)->update([
                  'email_subject' => $request->email_subject,
                  'invoice_email_body' => $request->invoice_email_body,
                  'email_body_placeholder' => $request->email_body_placeholder,
                  'notes' => $request->notes,
                  'send_copy_of_email_to_user' => $send_copy_of_email_to_user,
                  'attach_invoice_to_email' => $attach_invoice_to_email
          ]);
        }

        return redirect()->back()->with('success', 'Invoice Remainders Successfully Saved');
    }


    /**
     * Evergreen Retainers
    */

    public function evergreen_action(Request $request){
          $check = FirmEmailEvergreenRetainers::getEvergreenRetainersDetails(Auth::guard('client')->user()->id);

          $send_copy_of_email_to_user = ($request->has('send_copy_of_email_to_user')) ? 'yes' : 'no';
          
          if($check == null){
              FirmEmailEvergreenRetainers::create([
                    'client_id' => Auth::guard('client')->user()->id,
                    'email_subject' => $request->email_subject,
                    'ever_green_email_body' => $request->ever_green_email_body,
                    'email_body_placeholder' => $request->email_body_placeholder,
                    'send_copy_of_email_to_user' => $send_copy_of_email_to_user
              ]);
          }
          else{
            FirmEmailEvergreenRetainers::where('client_id', Auth::guard('client')->user()->id)->update([
                    'email_subject' => $request->email_subject,
                    'ever_green_email_body' => $request->ever_green_email_body,
                    'email_body_placeholder' => $request->email_body_placeholder,
                    'send_copy_of_email_to_user' => $send_copy_of_email_to_user
            ]);
          }

          return redirect()->back()->with('success', 'Invoice Remainders Successfully Saved');
    }

    /**
     * Deposit Request
    */

    public function deposit_action(Request $request){
          $check = FirmEmailDepositRequest::getDepositRequestDetails(Auth::guard('client')->user()->id);

          $send_copy_of_email_to_user = ($request->has('send_copy_of_email_to_user')) ? 'yes' : 'no';
          
          if($check == null){
              FirmEmailDepositRequest::create([
                    'client_id' => Auth::guard('client')->user()->id,
                    'email_subject' => $request->email_subject,
                    'deposit_email_body' => $request->deposit_email_body,
                    'email_body_placeholder' => $request->email_body_placeholder,
                    'send_copy_of_email_to_user' => $send_copy_of_email_to_user
              ]);
          }
          else{
            FirmEmailDepositRequest::where('client_id', Auth::guard('client')->user()->id)->update([
                    'email_subject' => $request->email_subject,
                    'deposit_email_body' => $request->deposit_email_body,
                    'email_body_placeholder' => $request->email_body_placeholder,
                    'send_copy_of_email_to_user' => $send_copy_of_email_to_user
            ]);
          }

          return redirect()->back()->with('success', 'Invoice Remainders Successfully Saved');
    }
}
