<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceManageController extends Controller
{
    //

    public function page()
    {
           return view('client.service.page');
    }
}
