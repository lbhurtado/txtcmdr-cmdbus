<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 17/11/15
 * Time: 12:05
 */

namespace App\Http\Controllers\Philippines;

use App\Classes\Philippines\IslandGroup;
use App\Http\Controllers\ApiController;

class IslandGroupController extends ApiController
{
    public function index()
    {

        if ((bool) $this->request->get('deep', false) == true)
            $islandgroups = IslandGroup::with(['regions', 'regions.provinces', 'regions.provinces.towns'])->get();
        else
            $islandgroups = IslandGroup::get(['id', 'name']);

        return $this->respond([
            'data' => $islandgroups
        ]);
    }
}