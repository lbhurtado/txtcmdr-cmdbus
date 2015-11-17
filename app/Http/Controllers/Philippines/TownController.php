<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 03/11/15
 * Time: 07:23
 */

namespace App\Http\Controllers\Philippines;

use App\Classes\Philippines\Town;
use App\Classes\Transformers\TownTransformer;
use App\Http\Controllers\ApiController;

class TownController  extends ApiController
{
    protected $townTransformer;

    public function __construct(TownTransformer $townTransformer)
    {
        $this->townTransformer = $townTransformer;
    }

    public function index()
    {
        $towns = Town::with(['province', 'province.region'])->get();

        return $this->respond([
            'data' => $this->townTransformer->transformCollection($towns)
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
}