<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientFirmDetails extends Model
{
    use HasFactory;

    protected $table = "client_firm_details";
    protected $fillable = [
        'client_id',
        'firm_name',
        'phone_no',
        'fax_no',
        'street_address_line_1',
        'street_address_line_2',
        'street_city',
        'street_state',
        'street_zip',
        'mailing_address_line_1',
        'mailing_address_line_2',
        'mailing_city',
        'mailing_state',
        'mailing_zip',
    ];
}
