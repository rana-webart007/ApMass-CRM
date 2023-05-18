<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddressSearch;

class ContactsManageController extends Controller
{
    //

    public function page()
    {
            return view('client.contacts.index');
    }

    public function search_address($search_for)
    {
            $result = AddressSearch::where('location', 'LIKE', '%'.$search_for.'%')->get();
            return response()->json($result);
    }

    public function search_address_by_id($search_id)
    {
            $result = AddressSearch::whereId($search_id)->first();
            return response()->json($result);
    }
}
