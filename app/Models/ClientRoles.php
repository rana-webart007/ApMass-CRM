<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientRoles extends Model
{
    use HasFactory;

    protected $table="client_roles";
    protected $fillable = [
        "matter_id",
        'role_id',
        "area",
        "matters_type",
        "client_role"
    ];

    public function adminMattersType()
    {
           return $this->belongsTo(MatterType::class);
    }

    /**
     * getter method
    */

    public static function totalRoles()
    {
           $total = count(ClientRoles::all());
           return $total;
    }

    public static function getAllRoles()
    {
           $all = ClientRoles::orderBy('area')->get();
           return $all;
    }

    public static function getTypesByAreaAndMatterName($area, $matter)
    {
           $all = ClientRoles::where('area', $area)->where('matters_type', $matter)->get(['client_role']);
           return $all;
    }
}
