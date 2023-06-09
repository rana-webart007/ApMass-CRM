<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrustAndOperatingCheck extends Model
{
    use HasFactory;

    protected $table = "trust_and_operating_checks";
    protected $fillable = [
         'client_id',
         'account',
         'trust_check_print',
         'trust_check_style',
         'trust_printing_method',
         'operating_check_print',
         'vendor_address_on_check',
         'operating_check_style',
         'operating_printing_method'
    ];

    public static function trustDetails($client_id)
    {
           $detail = TrustAndOperatingCheck::where('client_id', $client_id)->first();
           return $detail;
    }
}
