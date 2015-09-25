<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/25/15
 * Time: 20:45
 */

namespace App\Classes;


class SendOTPCommand
{
    public $mobile;

    /**
     * SendOTPCommand constructor.
     * @param $mobile
     */
    public function __construct($mobile)
    {
        $this->mobile = $mobile;
    }

}