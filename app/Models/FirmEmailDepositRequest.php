<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirmEmailDepositRequest extends Model
{
    use HasFactory;

    protected $table = 'firm_email_deposit_requests';
    protected $fillable = [
        'client_id',
        'email_subject',
        'deposit_email_body',
        'email_body_placeholder',
        'send_copy_of_email_to_user',
    ];

    public static function getDepositRequestDetails($client_id){
           $detail = FirmEmailDepositRequest::where('client_id', $client_id)->first();
           return $detail;
    }
}
