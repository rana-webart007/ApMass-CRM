<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirmEmailInvoices extends Model
{
    use HasFactory;

    protected $table = 'firm_email_invoices';
    protected $fillable = [
        'client_id',
        'email_subject',
        'inv_email_body',
        'email_body_placeholder',
        'send_copy_of_email_to_user',
        'attach_invoice_to_email',
    ];

    public static function getInvoceDetails($client_id){
           $detail = FirmEmailInvoices::where('client_id', $client_id)->first();
           return $detail;
    }
}
