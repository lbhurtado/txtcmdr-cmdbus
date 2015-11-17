<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 10/29/15
 * Time: 2:28 PM
 */

namespace App\Http\Controllers\Philippines;

use App\Classes\Philippines\Region;
use App\Classes\Transformers\RegionTransformer;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class RegionController extends ApiController
{
    protected $regionTransformer;

    public function __construct(Request $request, RegionTransformer $regionTransformer)
    {
        parent::__construct($request);

        $this->regionTransformer = $regionTransformer;

        $this->middleware('auth.basic', ['except' => ['index', 'getRegionsWithinIslandGroup', 'show', 'getRegionFromCode']]);
    }

    public function index()
    {
        if ((bool) $this->request->get('deep', false) == true)
            $regions = Region::with(['island_group', 'provinces', 'provinces.towns'])->get();
        else
           $regions = Region::get(['id', 'name', 'code']);

        return $this->respond([
            // 'data' => $this->regionTransformer->transformCollection($regions)
            //use fractals
            'data' => $regions
        ]);
    }

    public function getRegionsWithinIslandGroup($islandgroup_id) {
        $regions = Region::where('island_group_id', '=', $islandgroup_id)
            ->get(['id', 'name', 'code']);

        return $this->respond([
            'data' => $regions
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