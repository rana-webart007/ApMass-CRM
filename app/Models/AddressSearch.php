<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressSearch extends Model
{
    use HasFactory;

    protected $table = "address_searches";
    protected $fillable = [
        "address_id",
        "location",
        "address_line_1",
        "address_line_2",
        "state",
        "city",
        "zip"
    ];

    public static function allAddress()
    {
          $address = AddressSearch::orderBy('location')->get();
          return $address;
    }

    public static function totalAddress()
    {
           $total = count(AddressSearch::all());
           return $total;
    }
}
