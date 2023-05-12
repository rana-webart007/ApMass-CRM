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
}
