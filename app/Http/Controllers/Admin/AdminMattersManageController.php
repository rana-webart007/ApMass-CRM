<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{AreaOfLaw, MatterType};

class AdminMattersManageController extends Controller
{
    
   /**
    *  Area of law
   */

    public function area_of_law_add()
    {
           return view('admin.matters.area_of_law');
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

    /**
     *  Matter Type
     */

    public function matters_type_add()
    {
           $law_areas = AreaOfLaw::all();
           return view('admin.matters.matters_type_add', compact('law_areas'));
    }

    public function matters_type_add_action(Request $request)
    {
              $request->validate([
                     'area_of_law' => 'required|not_in:Select A Law Area',
                     'matters_type' => 'required'
              ]);

              $check = MatterType::whereArea($request->area_of_law)->where('matters_type', $request->matters_type)->first();
              $area_details = AreaOfLaw::whereArea($request->area_of_law)->first();
              $rand_id = substr(md5(date("d-m-Y").time()), 0, 40);

              if($check == null){
                     MatterType::create([
                            'area_id' => $area_details->id,
                            'unique_matter_id' => $rand_id,
                            'area' => $request->area_of_law,
                            'matters_type' => $request->matters_type,
                     ]);

                     return redirect()->back()->with('success', 'Successfully Saved');
              }else{
                     return redirect()->back()->with('danger', 'This Matters Already exists');
              }
    }

    public function type_delete($id)
    {
           MatterType::find($id)->delete();
           return redirect()->back()->with('success', 'Successfully Deleted');
    }

    public function type_edit($id)
    {
           $law_areas = AreaOfLaw::allLaws();
           $detail = MatterType::where('unique_matter_id', $id)->first();
           return view('admin.matters.matters_type_edit', compact('detail', 'law_areas'));
    }

    public function type_edit_action($id, Request $request)
    {
              $request->validate([
                     'area_of_law' => 'required|max:250',
                     'matters_type' => 'required'
              ]);

              $check = MatterType::whereArea($request->area_of_law)
                       ->where('matters_type', $request->matters_type)
                       ->where('unique_matter_id', '!=', $id)->first();

              if($check == null){
                     MatterType::where('unique_matter_id', $id)->update([
                            'area' => $request->area_of_law,
                            'matters_type' => $request->matters_type,
                     ]);

                     return redirect()->back()->with('success', 'Successfully Saved');
              }else{
                     return redirect()->back()->with('danger', 'This Matters Already exists');
              }
    }

    /**
     *  client role 
    */

    public function matters_client_role_add()
    {
        return view('admin.matters.matters_client_role_add');
    }
}
