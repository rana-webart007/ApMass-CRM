<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{AreaOfLaw};

class AdminMattersManageController extends Controller
{
    
   /**
    *  Area of law
   */

    public function area_of_law_add()
    {
           return view('admin.matters.area_of_law');
    }

    public function matters_type_add()
    {
           return view('admin.matters.matters_type_add');
    }

    public function matters_client_role_add()
    {
        return view('admin.matters.matters_client_role_add');
    }

    public function area_of_law_add_action(Request $request)
    {
           $request->validate([
                 'area_of_law' => 'required|max:250'
           ]);

           $check = AreaOfLaw::whereArea($request->area_of_law)->first();
           $rand_id = substr(md5(date("d-m-Y").time()), 0, 30);

           if($check == null){
                   AreaOfLaw::create([
                         'area' => $request->area_of_law,
                         'unique_id' => $rand_id,
                   ]);

                   return redirect()->back()->with('success', 'Successfully Saved');
           }else{
                   return redirect()->back()->with('danger', 'This Area Already exists');
           }
           
    }

    public function law_area_edit($id)
    {
           $details = AreaOfLaw::where('unique_id', $id)->first();
           return view('admin.matters.edit_law_area', compact('details'));
    }

    public function law_area_edit_action($id, Request $request)
    {
             $request->validate([
                  'area_of_law' => 'required|max:200'
             ]);

             $check = AreaOfLaw::whereArea($request->area_of_law)->where('unique_id', '!=', $id)->first();

             if($check == null){
                AreaOfLaw::where('unique_id', $id)->update([
                     'area' => $request->area_of_law,
                ]);

                return redirect()->back()->with('success', 'Successfully Saved');
             }else{
                return redirect()->back()->with('danger', 'This Area Already exists');
             }
    }


    public function law_area_delete($id)
    {
           AreaOfLaw::find($id)->delete();
           return redirect()->back()->with('success', 'Successfully Deleted');
    }
}
