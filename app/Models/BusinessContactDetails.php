<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusinessContactDetails extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "business_contact_details";
    protected $fillable = [
        "client_id",
        "org_id",
        "name",
        "email",
        "home",
        "cell",
        "business_role"
    ];
}
