<?php

namespace App\Http\Controllers\client\firm;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\{FirmInvoiceSettings};

class InvoiceManageController extends Controller
{
    /**
     * Invoice settings
    */

    public function einvoice_setting(Request $request){
            $check = FirmInvoiceSettings::invoiceDetails(Auth::guard('client')->user()->id);
            $einvoice = ($request->has('enable_invoice')) ? 'activate' : 'not-activated'; 

            if($check == null){
                FirmInvoiceSettings::create([
                    'client_id' => Auth::guard('client')->user()->id,
                    'einvoice_settings' => $einvoice,
                    'einvoice_line_items' => $request->einvoice_items,
                ]);
            }
            else{
                FirmInvoiceSettings::where('client_id', Auth::guard('client')->user()->id)->update([
                    'einvoice_settings' => $einvoice,
                    'einvoice_line_items' => $request->einvoice_items,
                ]);
            }

            return redirect()->back()->with('success', 'eInvoice Settings Saved Successfully');
    }

    /**
     * Template Settings 
    */

    function template_setting(Request $request){
             $request->validate([
                  'template_name' => 'required',
                  'add_template_name' => 'required_if:template_name,==,Template Name',
             ]);

             $check = FirmInvoiceSettings::invoiceDetails(Auth::guard('client')->user()->id);

             if($check == null){
                FirmInvoiceSettings::create([
                    'client_id' => Auth::guard('client')->user()->id,
                    'template_settings' => $request->template_name,
                    'custom_template_name' => $request->add_template_name,
                ]); 
             }
             else{
                FirmInvoiceSettings::where('client_id', Auth::guard('client')->user()->id)->update([
                    'template_settings' => $request->template_name,
                    'custom_template_name' => $request->add_template_name,
                ]);
             }

             return redirect()->back()->with('success', 'Template Settings Saved Successfully');
    }

    /**
     * basic pdf settings
    */

    public function basic_pdf_settings(Request $request){
        $check = FirmInvoiceSettings::invoiceDetails(Auth::guard('client')->user()->id);

        if($check == null){

             // upload logo..

            if($request->has('logo')){
                $request->validate([
                    'logo' => 'image|mimes:jpeg,png,gif|max:3072|dimensions:min_width=300,min_height=300',
                ]);

                $imageName = Str::random(10).'.'.$request->logo->extension();
                $request->logo->move(public_path('images/logo/'), $imageName);
            }
            else{
                $imageName = null;
            }

            FirmInvoiceSettings::create([
                'client_id' => Auth::guard('client')->user()->id,
                'basic_logo' => $imageName,
                'firm_name_font' => $request->firm_name_font,
                'firm_name_font_size' => $request->firm_name_font_size,
                'heading_font' => $request->heading_font,
                'body_font' => $request->body_font,
                'firm_details' => $request->firm_details,
                'letterhead_layout' => $request->letter_head_selected,
                'page_top_margin' => $request->top_margin,
                'page_bottom_margin' => $request->bottom_margin,
                'page_left_margin' => $request->left_margin,
                'page_right_margin' => $request->right_margin,
                'grid_style' => $request->grid_style
            ]);
        }
        else{
             // upload logo..

            if($request->has('logo')){
                $request->validate([
                    'logo' => 'image|mimes:jpeg,png,gif|max:3072|dimensions:min_width=300,min_height=300',
                ]);

                $imageName = Str::random(10).'.'.$request->logo->extension();
                $request->logo->move(public_path('images/logo/'), $imageName);
            }
            else{
                $imageName = $check->basic_logo;
            }

            FirmInvoiceSettings::where('client_id', Auth::guard('client')->user()->id)->update([
                'basic_logo' => $imageName,
                'firm_name_font' => $request->firm_name_font,
                'firm_name_font_size' => $request->firm_name_font_size,
                'heading_font' => $request->heading_font,
                'body_font' => $request->body_font,
                'firm_details' => $request->firm_details,
                'letterhead_layout' => $request->letter_head_selected,
                'page_top_margin' => $request->top_margin,
                'page_bottom_margin' => $request->bottom_margin,
                'page_left_margin' => $request->left_margin,
                'page_right_margin' => $request->right_margin,
                'grid_style' => $request->grid_style
            ]);
        }

        return redirect()->back()->with('success', 'Saved Successfully');
    }

    /**
     * Pdf Invoices
    */

     public function pdf_invoice(Request $request) {
              $request->validate([
                    'invoice_title' => 'required',
                    'incoice_custom_title' => 'required_if:invoice_title,==,Custom',
                    'invoice_sub_title' => 'required',
                    'incoice_custom_sub_title' => 'required_if:invoice_sub_title,==,Custom',
                    'time_and_fees' => 'required',
                    'time_single_line_description' => 'required_if:time_and_fees,==,Use a single line summary',
                    'expenses' => 'required',
                    'expenses_single_line_description' => 'required_if:expenses,==,Use a single line summary',
                    'interest' => 'required',
                    'interest_custom_text' => 'required_if:interest,==,Custom Text'
              ]);

            $check = FirmInvoiceSettings::invoiceDetails(Auth::guard('client')->user()->id);
            $invoice_title = ($request->invoice_title == "Custom") ? ($request->incoice_custom_title) : ($request->invoice_title);
            $invoice_sub_title = ($request->invoice_sub_title == "Custom") ? ($request->incoice_custom_sub_title) : ($request->invoice_sub_title);
            $time_description = ($request->time_and_fees == "Use a single line summary") ? ($request->time_single_line_description) : null;
            $interest_custom_text = ($request->interest == "Custom Text") ? ($request->interest_custom_text) : null;

            /**
             * signature img
            */

            if($check == null){
                if($request->has('sig_img')){
                    $request->validate([
                        'sig_img' => 'image|mimes:jpeg,png,gif|max:3072|dimensions:min_width=300,min_height=300',
                    ]);
    
                    $imageName = Str::random(10).'.'.$request->sig_img->extension();
                    $request->sig_img->move(public_path('images/signature/'), $imageName);
                }else{
                    $imageName = null;
                }

                FirmInvoiceSettings::create([
                     'client_id' => Auth::guard('client')->user()->id,
                     'payment_due' => $request->payment_due,
                     'invoice_title' => $invoice_title,
                     'invoice_sub_title' => $invoice_sub_title,
                     'time_and_fees' => $request->time_and_fees,
                     'time_single_line_description' => $time_description,
                     'show_staff_initials' => $request->show_staff_initials,
                     'show_rates' => $request->show_rates,
                     'show_hours' => $request->show_hours,
                     'show_hours_summary' => $request->show_hours_summary,
                     'show_fee_total' => $request->show_fee_total,
                     'show_fee_total_summary' => $request->show_fee_total_summary,
                     'show_evergreen_retainer' => $request->show_evergreen_retainer,
                     'show_due_date' => $request->show_due_date,
                     'expenses' => $request->expenses,
                     'interest' => $request->interest,
                     'interest_custom_text' => $interest_custom_text,
                     'surcharge_type' => $request->surcharge_type,
                     'surcharge_apply_to' => $request->surcharge_apply_to,
                     'surcharge_label_invoice' => $request->surcharge_label_invoice,
                     'non_billable_items' => $request->non_billable_items,
                     'notes' => $request->notes,
                     'sig_img' => $imageName,
                     'signature_name' => $request->signature_name,
                     'show_prior_balance' => $request->show_prior_balance,
                     'show_payment_summary' => $request->show_payment_summary,
                     'show_invoice_summary' => $request->show_invoice_summary,
                     'show_personal_fee_summary' => $request->show_personal_fee_summary,
                     'show_account_summary' => $request->show_account_summary,
                     'show_description_entries' => $request->show_description_entries,
                ]);
            }
            else{
                    if($request->has('sig_img')){
                        $request->validate([
                            'sig_img' => 'image|mimes:jpeg,png,gif|max:3072|dimensions:min_width=300,min_height=300',
                        ]);

                        $imageName = Str::random(10).'.'.$request->sig_img->extension();
                        $request->sig_img->move(public_path('images/signature/'), $imageName);
                    }else{
                        $imageName = $check->sig_img;
                    }

                    FirmInvoiceSettings::where('client_id', Auth::guard('client')->user()->id)->update([
                        'payment_due' => $request->payment_due,
                        'invoice_title' => $invoice_title,
                        'invoice_sub_title' => $invoice_sub_title,
                        'time_and_fees' => $request->time_and_fees,
                        'time_single_line_description' => $time_description,
                        'show_staff_initials' => $request->show_staff_initials,
                        'show_rates' => $request->show_rates,
                        'show_hours' => $request->show_hours,
                        'show_hours_summary' => $request->show_hours_summary,
                        'show_fee_total' => $request->show_fee_total,
                        'show_fee_total_summary' => $request->show_fee_total_summary,
                        'show_evergreen_retainer' => $request->show_evergreen_retainer,
                        'show_due_date' => $request->show_due_date,
                        'expenses' => $request->expenses,
                        'interest' => $request->interest,
                        'interest_custom_text' => $interest_custom_text,
                        'surcharge_type' => $request->surcharge_type,
                        'surcharge_apply_to' => $request->surcharge_apply_to,
                        'surcharge_label_invoice' => $request->surcharge_label_invoice,
                        'non_billable_items' => $request->non_billable_items,
                        'notes' => $request->notes,
                        'sig_img' => $imageName,
                        'signature_name' => $request->signature_name,
                        'show_prior_balance' => $request->show_prior_balance,
                        'show_payment_summary' => $request->show_payment_summary,
                        'show_invoice_summary' => $request->show_invoice_summary,
                        'show_personal_fee_summary' => $request->show_personal_fee_summary,
                        'show_account_summary' => $request->show_account_summary,
                        'show_description_entries' => $request->show_description_entries,
                   ]);
            }

            return redirect()->back()->with('success', 'Saved Successfully');
     }
}