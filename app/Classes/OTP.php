<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/25/15
 * Time: 21:51
 */

namespace App\Classes;

use App\Classes\Eventing\EventGenerator;
use App\Classes\Parse\Anyphone;
use Parse\ParseObject;

class OTP
{
    use EventGenerator;

    private $randomCode;

    /**
     * @return mixed
     */
    public function getRandomCode()
    {
        return $this->randomCode;
    }

    /**
     * OTP constructor.
     * @param $randomCode
     */
    public function __construct($randomCode)
    {
        $this->randomCode = $randomCode;
    }

    public static function create($mobile)
    {
        $randomCode =
            (!Anyphone::getInstance()->setUser($mobile))
                ? Anyphone::getInstance()->signupParseUserWithRandomCode()
                : Anyphone::getInstance()->updateParseUserWithRandomCode();

        $otp = new static($randomCode);

        $otp->raise(new OTPWasCreated($otp));

        return $otp;
    }
}
