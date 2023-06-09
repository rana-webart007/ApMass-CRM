<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccountSettings extends Model
{
    use HasFactory;

    protected $table = "bank_account_settings";
    protected $fillable = [
         'client_id',
         'trust_account_id',
         'pdf_trust_deposite',
         'pdf_trust_payment',
         'pdf_operating_payment',
         'pdf_trust_transfer'
    ];

    public static function bankDetails($client_id)
    {
           $detail = BankAccountSettings::where('client_id', $client_id)->first();
           return $detail;
    }
}
