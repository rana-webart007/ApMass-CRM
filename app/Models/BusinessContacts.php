<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusinessContacts extends Model
{
    use HasFactory, SoftDeletes;

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

    public static function totalBusinessCount($client_id)
    {
           $tot = count(BusinessContacts::where('client_id', $client_id)->get());
           return $tot;
    }

    public static function deletedRecords($client_id)
    {
           $all = BusinessContacts::where('client_id', $client_id)
                  ->orderBy('id', 'desc')->onlyTrashed()->get();
           return $all;
    }

    public static function totalDeletedRecords($client_id)
    {
           $tot = count(BusinessContacts::where('client_id', $client_id)
                  ->orderBy('id', 'desc')->onlyTrashed()->get());
           return $tot;
    }

    public static function specificBusinessContact($ids)
    {
           $detail = BusinessContacts::whereIn('id', $ids)->get();
           return $detail;
    }

    public static function specificOneBusinessContact($id)
    {
           $detail = BusinessContacts::where('id', $id)->first();
           return $detail;
    }
}
