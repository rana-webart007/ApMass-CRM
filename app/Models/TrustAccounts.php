<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class TrustAccounts extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "trust_accounts";
    protected $fillable = [
        'client_id',
        'trust_account_id',
        'trust_account_name',
        'display_name',
        'bank_name',
        'branch',
        'state',
        'status'
    ];

    public static function getDetailsByStatus($type)
    {
           $all = TrustAccounts::where('client_id', Auth::guard('client')->user()->id)->where('status', $type)->orderBy('id', 'desc')->get();
           return $all;
    }

    public static function specificAccountDetails($id)
    {
           $details = TrustAccounts::where('trust_account_id', $id)->first();
           return $details;
    }

    public static function editTrustAccounts($id, $account_name, $display_name, $bank_name, $branch, $state)
    {
          TrustAccounts::where('trust_account_id', $id)->update([
                  'trust_account_name' => $account_name,
                  'display_name' => $display_name,
                  'bank_name' => $bank_name,
                  'branch' => $branch,
                  'state' => $state
          ]);

          return true;
    }

    public static function statusChange($id, $status)
    {
          TrustAccounts::where('trust_account_id', $id)->update([
                'status' => $status,
          ]);

          return true;
    }
}