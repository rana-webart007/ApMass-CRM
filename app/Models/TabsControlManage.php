<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabsControlManage extends Model
{
    use HasFactory;

    protected $table = "tabs_control_manages";
    protected $fillable = [
        'client_id',
        'tab_open_for',
        'tab_open_id',
    ];

    public static function storeTabs($client_id, $tab_open_for, $tab_open_id)
    {
            $check = TabsControlManage::where('client_id', $client_id)
                        ->where('tab_open_for', $tab_open_for)
                        ->where('tab_open_id', $tab_open_id)
                        ->first();

            if($check == null){
                    TabsControlManage::create([
                        'client_id' => $client_id,
                        'tab_open_for' => $tab_open_for,
                        'tab_open_id' => $tab_open_id,
                    ]);
            }

            return true;
    }


    public static function getTabs($client_id, $tab_open_for)
    {
            $tabs = TabsControlManage::where('client_id', $client_id)
            ->where('tab_open_for', $tab_open_for)
            ->get();

            return $tabs;
    }

    public static function closeTab($client_id, $tab_open_for, $tab_open_id)
    {
          TabsControlManage::where('client_id', $client_id)
          ->where('tab_open_for', $tab_open_for)
          ->where('tab_open_id', $tab_open_id)->delete();

          return true;
    }

    public static function tabNumbersCount($client_id, $tab_open_for)
    {
           $count = count(TabsControlManage::where('client_id', $client_id)
           ->where('tab_open_for', $tab_open_for)->get());

           return $count;
    }
}