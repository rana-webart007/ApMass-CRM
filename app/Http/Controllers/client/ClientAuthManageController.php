<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientAuthManageController extends Controller
{
    //

    public function login()
    {
           return view('client.login');
    }

    
}
