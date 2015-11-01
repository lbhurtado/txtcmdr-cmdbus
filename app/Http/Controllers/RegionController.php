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
        $regions = Region::all();
        $regions = app('db')->select("select t.id, t.name as town, p.name as province, r.name as region from towns t inner join provinces p on t.province_id = p.id inner join regions r on p.region_id = r.id;");
        return response()->json($regions);
    }

    public function getRegion($code){

        //$region  = Region::where('code', $code)->pluck('name');
        $region  = Region::where('code', $code)->get(['code', 'name']);

        return response()->json($region);
    }
}