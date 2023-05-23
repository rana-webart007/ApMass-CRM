<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessContacts extends Model
{
    use HasFactory;

    protected $table = "business_contacts";
    protected $fillable = [
        "client_id",
        "company_name",
        "company_type",
        "email",
        "phone",
        "fax",
        "address_line_1",
        "address_line_2",
        "city",
        "state",
        "zip",
    ];

    public static function existingOrganization($client_id)
    {
           $org = BusinessContacts::where('client_id', $client_id)->get();
           return $org;
    }
}
