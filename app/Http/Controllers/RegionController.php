<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 10/29/15
 * Time: 2:28 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Region as Region;

class RegionController extends Controller
{
    public function index()
    {
        //$regions = Region::all();
        $regions = app('db')->select("select t.code, t.name as town, p.name as province, r.name as region from towns t inner join provinces p on t.province_code = p.code inner join regions r on p.region_code = r.code;");
        return response()->json($regions);
    }

    public function getRegion($code){

        $region  = Region::where('code', $code)->pluck('name');

        return response()->json($region);
    }
}