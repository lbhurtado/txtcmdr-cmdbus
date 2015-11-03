<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 03/11/15
 * Time: 00:26
 */

namespace App\Classes\Transformers;


class ProvinceTransformer extends Transformer
{
    public function transform($province)
    {
        return [
            'id'    => $province->id,
            'name'  => $province->name,
            'region'=> $province->region,
            'municipalities' => $province->towns
        ];
    }
}