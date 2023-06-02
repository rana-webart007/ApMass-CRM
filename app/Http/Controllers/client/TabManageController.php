<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{TabsControlManage};

class TabManageController extends Controller
{
    //

    public function delete_tab($id, $type,Request $request)
    {
        $request->session()->put('delete_this_tab', 'yes');
        TabsControlManage::closeTab(Auth::guard('client')->user()->id, $type, $id);
        $tab_count = TabsControlManage::tabNumbersCount(Auth::guard('client')->user()->id, $type);
        
        if($tab_count > 0){
            $request->session()->forget('delete_this_tab');
            return redirect()->back();
        }
        else{
            return redirect()->route('client.matters.page');
        }
    }
}
