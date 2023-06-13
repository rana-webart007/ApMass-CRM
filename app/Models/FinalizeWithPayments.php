<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinalizeWithPayments extends Model
{
    use HasFactory;

    protected $table = "finalize_with_payments";
    protected $fillable = [
           'client_id',
           'first_preference',
           'second_preference',
           'third_preference'
    ];

    public static function paymentDetails($client_id){
           $detail = FinalizeWithPayments::where('client_id', $client_id)->first();
           return $detail;
    }
}
