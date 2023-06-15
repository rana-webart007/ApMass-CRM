<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirmInvoiceSettings extends Model
{
    use HasFactory;

    protected $table = "firm_invoice_settings";

    protected $fillable = [
        'client_id',
        'einvoice_settings',
        'einvoice_line_items',
        'template_settings',
        'custom_template_name',
        'basic_logo',
        'firm_name_font',
        'firm_name_font_size',
        'heading_font',
        'body_font',
        'firm_details',
        'letterhead_layout',
        'page_top_margin',
        'page_bottom_margin',
        'page_left_margin',
        'page_right_margin',
        'grid_style',
        
        'payment_due',
        'invoice_title',
        'invoice_sub_title',
        'time_and_fees',
        'time_single_line_description',
        'show_staff_initials',
        'show_rates',
        'show_hours',
        'show_hours_summary',
        'show_fee_total',
        'show_fee_total_summary',
        'show_evergreen_retainer',
        'show_due_date',
        'expenses',
        'expenses_single_line_description',
        'expenses_append_list_of_time',
        'interest',
        'interest_custom_text',
        'surcharge_type',
        'surcharge_apply_to',
        'surcharge_label_invoice',
        'non_billable_items',
        'notes',
        'sig_img',
        'signature_name',
        'show_prior_balance',
        'show_payment_summary',
        'show_invoice_summary',
        'show_personal_fee_summary',
        'show_account_summary',
        'show_description_entries'
    ];

    public static function invoiceDetails($client_id){
            $detail = FirmInvoiceSettings::where('client_id', $client_id)->first();
            return $detail;
    }
}