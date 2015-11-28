<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 03/11/15
 * Time: 07:19
 */

namespace App\Http\Controllers\Philippines;

use App\Classes\Commanding\ValidationCommandBus;
use App\Classes\Philippines\Province;
use App\Classes\Philippines\Region;
use App\Classes\Transformers\ProvinceTransformer;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class ProvinceController extends ApiController
{
    protected $provinceTransformer;

    public function __construct(ValidationCommandBus $commandBus, Request $request, ProvinceTransformer $provinceTransformer)
    {
        parent::__construct($commandBus, $request);

        $this->provinceTransformer = $provinceTransformer;
    }

    public function index()
    {
        if ((bool) $this->request->get('deep', false) == true)
            $provinces = Province::with(['region', 'towns'])->get();
        else
            $provinces = Province::get(['id', 'name']);

        return $this->respond([
//            'data' => $this->provinceTransformer->transformCollection($provinces)
        // use fractals
            'data' => $provinces
        ]);
    }

    public function getProvince($id)
    {
        $province = Province::with(['region', 'towns'])
            ->where('id', '=', $id)
            ->first();

        return $this->respond([
            'data' => $this->provinceTransformer->transform($province)
        ]);
    }

    public function getProvincesWithinRegion($region_code) {
        $region = Region::where('code', '=', $region_code)
            ->first();

        $region_id = $region->id;
        $provinces = Province::where('region_id', '=', $region_id)
            ->get();

        return $this->respond([
            'data' => $provinces
        ]);
    }
}