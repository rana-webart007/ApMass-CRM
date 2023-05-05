<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountsManageController extends Controller
{
    //

    public function page()
    {
           return view('client.account.index');
    }
}
