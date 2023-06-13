<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvergreenRetainer extends Model
{
    use HasFactory;

    protected $table = "evergreen_retainers";
    protected $fillable = [
        'client_id',
        'retainer_activate',
        'min_thresold',
        'replenish_upto'
    ];

    public static function retainerDetails($client_id){
           $all = EvergreenRetainer::where('client_id', $client_id)->first();
           return $all;
    }
}
