<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Clients extends Authenticatable
{
    use HasFactory;

    protected $guard = "client";
    protected $table = "clients";
    protected $fillable = [
        'name',
        'email',
        'phone',
        'country',
        'city',
        'password',
        'prof_img',
        'status'
    ];
}
