<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/27/15
 * Time: 13:12
 */

namespace App\Commands;


class ConfirmPINCommand
{
    public $origin;

    public $mobile;

    public $pin;

    /**
     * ConfirmPINCommand constructor.
     * @param $origin
     * @param $mobile
     * @param $pin
     */
    public function __construct($origin, $mobile, $pin)
    {
        $this->origin = $origin;

        $this->mobile = $mobile;

        $this->pin = $pin;
    }
}