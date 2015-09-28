<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/27/15
 * Time: 21:21
 */

namespace App\Commands;


class LoadMobileCommand
{
    public $origin;

    public $mobile;

    public $amount;

    /**
     * LoadMobileCommand constructor.
     * @param $origin
     * @param $mobile
     * @param $amount
     */
    public function __construct($origin, $mobile, $amount)
    {
        $this->origin = $origin;

        $this->mobile = $mobile;

        $this->amount = $amount;
    }
}