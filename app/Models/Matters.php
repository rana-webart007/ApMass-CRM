<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Matters extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "matters";
    protected $fillable = [
        'matter_id',
        'added_by',
        'state_abbr',
        'matter_area',
        'matter_type',
        'internal_ref',
        'matter_descp',
        'client_role',
        'attorney_responsible',
        'person_assisting',
        'originating_attorney',
        'client',
        'debtors',
        'billing_type',
        'fee_estimate',
        'contingency',
        'bulling_units',
        'custom_minutes',
        'hourly_rates',
        'override_rate_for_all',
        'override_indicidual_name',
        'override_indicidual_rate',
        'late_payment',
        'grace_period',
        'custom_days',
        'custom_interest',
        'calculate_interest_from',
        'cc_emails',
        'bcc_emails',
        'invoice_templates',
        'invoice_title',
        'custom_invoice_title',
        'invoice_sub_title',
        'custom_invoice_sub_title',
        'notes',
        'einvoice',
        'surcharge',
        'surcharge_type',
        'surcharge_percent_amount',
        'surcharge_apply_to',
        'surcharge_label_on_invoice',
        'status'
    ];

    public static function getAllMAtters()
    {
           $matters = Matters::where('added_by', Auth::guard('client')->user()->id)->withTrashed()->paginate(15);
           return $matters;
    }

    public static function countAllMatters($client_id)
    {
           $total = count(Matters::where('added_by', Auth::guard('client')->user()->id)->withTrashed()->get());
           return $total;
    }

    public static function countDeletedMatters($client_id)
    {
        $total = count(Matters::where('added_by', Auth::guard('client')->user()->id)->onlyTrashed()->get());
        return $total;
    }

    /**
     * change status
    */

    public static function changeMatterStatus($matter_id, $status){
        Matters::where('added_by', Auth::guard('client')->user()->id)
        ->whereId($matter_id)->update([
              'status' => $status,
        ]);

        return true;
    }

    /**
     * count matters
    */

    public static function countMattersByStatus($status){
            $total = count(Matters::where('added_by', Auth::guard('client')->user()->id)->where('status', $status)->get());
            return $total;
    }

    /**
     * specific matters
    */

    public static function specificMatter($status){
        $total = Matters::where('added_by', Auth::guard('client')->user()->id)->where('status', $status)->paginate(15);
        return $total;
    }

    /**
     * deleted matters
    */

    public static function deletedMatters()
    {
        $total = Matters::where('added_by', Auth::guard('client')->user()->id)->onlyTrashed()->paginate(15);
        return $total;
    }
}