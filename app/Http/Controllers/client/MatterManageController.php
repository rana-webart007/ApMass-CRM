<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MatterManageController extends Controller
{
    //

    public function matter_add()
    {
           $states = DB::table('county_lists')->where('state_abbr', '!=', 'state_abbr')->get();
           return view('client.matter.add', compact('states'));
    }
}
