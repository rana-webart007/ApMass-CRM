<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonContact extends Model
{
    use HasFactory;

    protected $table = "person_contacts";
    protected $fillable = [
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
}
