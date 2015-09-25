<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/25/15
 * Time: 21:41
 */

namespace App\Classes;


use App\Classes\Commanding\CommandHandler;
use App\Classes\OTP;

class SendOTPCommandHandler extends CommandHandler
{
    public function handle($command)
    {
        $otp = OTP::create($command->mobile);
        $this->dispatcher->dispatch($otp->releaseEvents());
    }
}