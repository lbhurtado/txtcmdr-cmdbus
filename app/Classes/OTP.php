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
use App\Events\OTPWasGenerated;
use App\Events\PINWasConfirmed;

class OTP
{
    use EventGenerator;

    private $origin;

    private $mobile;

    private $randomCode;

    public function getOrigin()
    {
        return $this->origin;
    }

    public function getMobile()
    {
        return $this->mobile;
    }

    public function getRandomCode()
    {
        return $this->randomCode;

        return $this;
    }

    protected function setOrigin($origin)
    {
        $this->origin = $origin;

        return $this;
    }

    protected function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    protected function setRandomCode($randomCode)
    {
        $this->randomCode = $randomCode;
    }

    public static function generate($origin, $mobile)
    {
        $randomCode =
            (!Anyphone::getInstance()->setUser($mobile))
                ? Anyphone::getInstance()->signupParseUserWithRandomCode()
                : Anyphone::getInstance()->updateParseUserWithRandomCode();

        $otp = new static();

        $otp->setMobile(Anyphone::getInstance()->getMobile())
            ->setOrigin($origin)
            ->setRandomCode($randomCode);

        $otp->raise(new OTPWasGenerated($otp));

        return $otp;
    }

    public static function confirm($origin, $mobile, $pin)
    {
        if (!Anyphone::getInstance()->validateUser($mobile, $pin))
            throw new \Exception("not validated");

        $otp = new static();

        $otp->setMobile(Anyphone::getInstance()->getMobile())
            ->setOrigin($origin)
            ->setRandomCode($pin);

        $otp->raise(new PINWasConfirmed($otp));

        return $otp;
    }
}
