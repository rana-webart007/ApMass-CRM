<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaOfLaw extends Model
{
    use HasFactory;

    protected $table="area_of_laws";
    protected $fillable = [
        'area',
        'unique_id'
    ];

    public function mattersType()
    {
            return $this->hasMany(MatterType::class);
    }
}
