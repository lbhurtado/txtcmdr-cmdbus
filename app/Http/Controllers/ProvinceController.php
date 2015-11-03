<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 03/11/15
 * Time: 07:19
 */

namespace App\Http\Controllers;

use App\Classes\Province;
use App\Classes\Transformers\ProvinceTransformer;

class ProvinceController extends ApiController
{
    protected $provinceTransformer;

    public function __construct(ProvinceTransformer $provinceTransformer)
    {
        $this->provinceTransformer = $provinceTransformer;
    }

    public function index()
    {
        $provinces = Province::with(['region', 'towns'])->get();

        return $this->respond([
            'data' => $this->provinceTransformer->transformCollection($provinces)
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
}