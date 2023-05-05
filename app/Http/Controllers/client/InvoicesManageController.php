<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoicesManageController extends Controller
{
    //

    public function page()
    {
           return view('client.invoice.index');
    }
}
