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
use App\Classes\Town;

class GeoPoliticalController extends Controller
{
    public function index()
    {
       return response("The quick brown fox...");
    }

    public function getRegions()
    {
        $regions = Region::with(['provinces', 'provinces.towns'])->get();
        return response()->json($regions);
    }

    public function getRegion($id)
    {
        $region = app('db')
            ->table('regions')
            ->where('id', '=', $id)
            ->first();

        $region = Region::with(['provinces', 'provinces.towns'])
            ->where('id', '=', $id)
            ->first();

        return response()->json($region);
    }

    public function getRegionFromCode($code)
    {
        $region = Region::with(['provinces', 'provinces.towns'])
            ->where('code', '=', $code)
            ->first();

        return response()->json($region);
    }

    public function getProvinces()
    {
        $provinces = Province::with(['region', 'towns'])->get();

        return response()->json($provinces);
    }

    public function getProvince($id)
    {
        $province = Province::with(['region', 'towns'])
            ->where('id', '=', $id)
            ->first();

        return response()->json($province);
    }

    public function getTowns()
    {
        $towns = Town::with(['province', 'province.region'])->get();

        return response()->json($towns);
    }

    public function getTown($id)
    {
        $town = Town::with(['province', 'province.region'])
            ->where('id', '=', $id)
            ->first();

        return response()->json($town);
    }
}