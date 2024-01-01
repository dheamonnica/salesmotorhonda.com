<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getKredit(Request $request){
        $kecamatan = DB::SELECT("SELECT post_id as motor_id, uang_muka, diskon, bulan_11, bulan_17, bulan_23, bulan_27, bulan_29, bulan_33, bulan_35 FROM `credits` WHERE uang_muka=$request->uang_muka");
        return response()->json($kecamatan);
    }
}
