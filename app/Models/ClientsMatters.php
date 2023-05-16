<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientsMatters extends Model
{
    use HasFactory;

    protected $table = "clients_matters";
    protected $fillable = [
          'matters_id',
          'state_abbr',
          'law_area',
          'matter_type',
          'internal_preference',
          'matter_description',
          'client_role',

          'attorney_responsible',
          'person_assisting',
          'organization_attorney',

          'client',
          'debtors',

          'billing_types',
          'fee_estimate_billing',
          'contingency_percent',

          'billing_units',
          'custom_billing_units',
          'hourly_rate',
          'custom_override_rate',
          'custom_override_default_client',
          'custom_override_default_rate',
          'late_payment',
          'grace_period',
          'grace_period_days',
          'grace_period_interest',
          'grace_period_interest_from',

          'cc_emails',
          'bcc_emails',

          'invoice_template',
          'invoive_title',
          'custom_invoice_title_field',
          'invoive_sub_title',
          'custom_invoice_sub_title_field',
          'notes',
          'einvoice',

          'surcharge_check',
          'surcharge_type',
          'surcharge_percent_or_amount',
          'surcharge_apply_to',
          'surcharge_liable'
    ];
}
