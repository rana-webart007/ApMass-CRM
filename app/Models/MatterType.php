<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatterType extends Model
{
    use HasFactory;

    protected $table = "matter_types";
    protected $fillable = [
        "area_id",
        'unique_matter_id',
        "area",
        "matters_type"
    ];

    public function areaOfLaws()
    {
            return $this->belongsTo(AreaOfLaw::class);
    }

    public function clientRole()
    {
            return $this->hasMany(ClientRoles::class);
    }

    /**
     * getter function
    */

    public static function totalTypes()
    {
           $total = count(MatterType::all());
           return $total;
    }

    public static function allMattersType()
    {
           $types = MatterType::orderBy('area')->get();
           return $types;
    }

    public static function getTypesByAreaName($area)
    {
           $areas = MatterType::whereArea($area)->get(["matters_type", "id"]);
           return $areas;
    }
}
