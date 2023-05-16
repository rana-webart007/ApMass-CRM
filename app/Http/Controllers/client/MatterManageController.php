<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\{AreaOfLaw, MatterType, ClientRoles};

class MatterManageController extends Controller
{
    //

    public function matter_add()
    {
           $states = DB::table('county_lists')->where('state_abbr', '!=', 'state_abbr')->get();
           $areas = AreaOfLaw::allLaws();

           return view('client.matter.add', compact('states', 'areas'));
    }

    public function matter_get_by_area($area)
    {
            $data = MatterType::getTypesByAreaName(trim($area));
            return response()->json($data);
    }

    public function get_client_role(Request $request)
    {
            $area = $request->area;
            $matter = $request->matter;
            $data = ClientRoles::getTypesByAreaAndMatterName(trim($area), trim($matter));
            return response()->json($data);
    }
}
