<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/25/15
 * Time: 20:45
 */

namespace App\Commands;


class GenerateOTPCommand
{
    public $origin;

    public $mobile;

    /**
     * SendOTPCommand constructor.
     * @param $mobile
     */
    public function __construct($origin, $mobile)
    {
        $this->origin = $origin;

        $this->mobile = $mobile;
    }

}