<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersonContact extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "person_contacts";
    protected $fillable = [
        "client_id",
        "name",
        "email",
        "home",
        "cell",
        "address_line_1",
        "address_line_2",
        "state",
        "city",
        "zip",
        "add_to_existing_org",
    ];

    public static function totalPersonContact($client_id)
    {
           $total = count(PersonContact::where('client_id', $client_id)->get());
           return $total;
    }

    public static function allPersonContact($client_id)
    {
           $all = PersonContact::where('client_id', $client_id)
                  ->orderBy('id', 'desc')->get();
           return $all;
    }

    public static function deletedRecords($client_id)
    {
           $all = PersonContact::where('client_id', $client_id)
                  ->orderBy('id', 'desc')->onlyTrashed()->get();
           return $all;
    }

    public static function totalDeletedRecords($client_id)
    {
           $tot = count(PersonContact::where('client_id', $client_id)
                  ->orderBy('id', 'desc')->onlyTrashed()->get());
           return $tot;
    }
}
