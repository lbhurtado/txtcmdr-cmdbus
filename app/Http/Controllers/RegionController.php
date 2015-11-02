<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 10/29/15
 * Time: 2:28 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Region;
use App\Classes\Province;

class RegionController extends Controller
{
    public function index() {
        $regions = app('db')->select("select t.id, t.name as town, p.name as province, r.name as region from towns t inner join provinces p on t.province_id = p.id inner join regions r on p.region_id = r.id;");
        return response()->json($regions);
    }

    public function regions()
    {
        $regions = Region::all();
        return response()->json($regions);
    }

    public function getRegionFromCode($code){

        $region  = Region::where('code', $code)->first();

        return response()->json($region);
    }

    public function getRegion($region_id){
        $region = Region::find($region_id);

        return response()->json($region);
    }

    public function provinces()
    {
        $provinces = Province::all();
        return response()->json($provinces);
    }

    public function getProvince($province_id){
        $province = Province::find($province_id);

        return response()->json($province);
    }
}