<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 10/29/15
 * Time: 2:28 PM
 */

namespace App\Http\Controllers;

use App\Classes\Region;
use App\Classes\Transformers\RegionTransformer;
use App\Classes\User;

class RegionController extends ApiController
{
    protected $regionTransformer;

    public function __construct(RegionTransformer $regionTransformer)
    {
        $this->regionTransformer = $regionTransformer;

        $this->middleware('auth.basic', ['except' => ['index', 'show', 'getRegionFromCode']]);
    }

    public function index()
    {
        $regions = Region::with(['provinces', 'provinces.towns'])->get();

        return $this->respond([
            'data' => $this->regionTransformer->transformCollection($regions)
        ]);
    }

    public function show($id)
    {
//        $region = app('db')
//            ->table('regions')
//            ->where('id', '=', $id)
//            ->first();

        $region = Region::with(['provinces', 'provinces.towns'])
            ->where('id', '=', $id)
            ->first();

        if (!$region) {
            return $this->respondNotFound('Region does not exist!');
        }

        return $this->respond([
            'data' => $this->regionTransformer->transform($region)
        ]);
    }

    public function getRegionFromCode($code)
    {
        $region = Region::with(['provinces', 'provinces.towns'])
            ->where('code', '=', $code)
            ->first();

        if (!$region) {
            return $this->respondNotFound('Region does not exist!');
        }

        return $this->respond([
            'data' => $this->regionTransformer->transform($region)
        ]);
    }

    public function store(Request $request) {

        if (! $this->request->input('id') or ! $this->request->input('name') or ! $this->request->input('code')) {
            return $this->respondUnprocessable();
        }

        Region::create($request->all());

        return $this->respondCreated("region created.");
    }

}