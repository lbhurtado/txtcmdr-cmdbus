<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/27/15
 * Time: 14:13
 */

namespace App\Commands;

use App\Classes\Commanding\CommandHandler;
use App\Classes\OTP;

class ConfirmPINCommandHandler extends CommandHandler
{
    public function handle($command)
    {
        $otp = OTP::confirm($command->origin, $command->mobile, $command->pin);
        $this->dispatcher->dispatch($otp->releaseEvents());
    }
}