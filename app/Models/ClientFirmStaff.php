<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ClientFirmStaff extends Model
{
    use HasFactory;

    protected $table = "client_firm_staff";
    protected $fillable = [
        'client_id',
        'name',
        'role',
        'email',
        'phone_no',
        'mobile_no',
        'hourly_rate',
        'time_entries',
        'former_staff'
    ];

    public static function all_clients()
    {
            $all = ClientFirmStaff::where('client_id', Auth::guard('client')->user()->id)->where('former_staff', 'no')->get();
            return $all;
    }

    public static function former_clients()
    {
            $all = ClientFirmStaff::where('client_id', Auth::guard('client')->user()->id)->where('former_staff', 'yes')->get();
            return $all;
    }
}
