<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirmBillingUnits extends Model
{
    use HasFactory;

    protected $table = "firm_billing_units";
    protected $fillable = [
        'client_id',
        'time',
        'custom_or_not'
    ];
}
