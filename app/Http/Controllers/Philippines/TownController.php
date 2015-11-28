<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 03/11/15
 * Time: 07:23
 */

namespace App\Http\Controllers\Philippines;

use App\Classes\Commanding\ValidationCommandBus;
use App\Classes\Philippines\Town;
use App\Classes\Philippines\Province;
use App\Classes\Transformers\TownTransformer;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class TownController extends ApiController
{
    protected $townTransformer;

    public function __construct(ValidationCommandBus $commandBus, Request $request, TownTransformer $townTransformer)
    {
        parent::__construct($commandBus, $request);

        $this->townTransformer = $townTransformer;
    }

    public function index()
    {
        if ((bool) $this->request->get('deep', false) == true)
            $towns = Town::with(['province', 'province.region'])->get();
        else
            $towns = Town::get(['id', 'name']);

        return $this->respond([
//            'data' => $this->townTransformer->transformCollection($towns)
            //use fractals
            'data' => $towns
        ]);
    }

    public function getTown($id)
    {
        $town = Town::with(['province', 'province.region'])
            ->where('id', '=', $id)
            ->first();

        return $this->respond([
            'data' => $this->townTransformer->transform($town)
        ]);
    }

    public function getTownsWithinProvince($province_code) {

        $towns = Town::where('province_id', '=', $province_code . "00000")
            ->get();

        return $this->respond([
            'data' => $towns
        ]);
    }
}