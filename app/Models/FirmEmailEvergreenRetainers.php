<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirmEmailEvergreenRetainers extends Model
{
    use HasFactory;

    protected $table = 'firm_email_evergreen_retainers';
    protected $fillable = [
        'client_id',
        'email_subject',
        'ever_green_email_body',
        'email_body_placeholder',
        'send_copy_of_email_to_user',
    ];

    public static function getEvergreenRetainersDetails($client_id){
           $detail = FirmEmailEvergreenRetainers::where('client_id', $client_id)->first();
           return $detail;
    }
}
