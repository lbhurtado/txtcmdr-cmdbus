<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/25/15
 * Time: 22:49
 */

namespace App\Classes;

use App\Classes\OTP;
use App\Events\Event;
use Illuminate\Queue\SerializesModels;

class OTPWasCreated extends Event
{
    use SerializesModels;

    public $otp;

    /**
     * OTPWasSent constructor.
     * @param $otp
     */
    public function __construct(OTP $otp)
    {
        $this->otp = $otp;
    }

}