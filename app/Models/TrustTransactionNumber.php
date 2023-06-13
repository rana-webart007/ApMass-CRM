<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrustTransactionNumber extends Model
{
    use HasFactory;

    protected $table = "trust_transaction_numbers";
    protected $fillable = [
        'client_id',
        'account',
        'starting_no',
        'leading_zeros',
        'example_no'
    ];

    public static function trustTransaction($client_id) {
           $detail = TrustTransactionNumber::where('client_id', $client_id)->first();
           return $detail;
    }
}
