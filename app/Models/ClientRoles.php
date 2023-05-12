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
        "area",
        "matters_type",
        "client_role"
    ];

    public function adminMattersType()
    {
           return $this->belongsTo(MatterType::class);
    }
}
