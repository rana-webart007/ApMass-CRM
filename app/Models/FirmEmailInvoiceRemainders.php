<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirmEmailInvoiceRemainders extends Model
{
    use HasFactory;

    protected $table = "firm_email_invoice_remainders";
    protected $fillable = [
           'client_id',
           'email_subject',
           'invoice_email_body',
           'email_body_placeholder',
           'notes',
           'send_copy_of_email_to_user',
           'attach_invoice_to_email'
    ];

    public static function getInvoceRemaindersDetails($client_id){
        $detail = FirmEmailInvoiceRemainders::where('client_id', $client_id)->first();
        return $detail;
    }
}
