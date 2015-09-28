<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/25/15
 * Time: 22:49
 */

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use App\Classes\OTP;

class OTPWasGenerated extends Event
{
    use SerializesModels;

    public $otp;

    /**
     * OTPWasCreated constructor.
     * @param $otp
     */
    public function __construct(OTP $otp)
    {
        $this->otp = $otp;
    }

}