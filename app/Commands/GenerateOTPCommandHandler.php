<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/25/15
 * Time: 21:41
 */

namespace App\Commands;

use App\Classes\Commanding\CommandHandler;
use App\Classes\OTP;

class GenerateOTPCommandHandler extends CommandHandler
{
    public function handle($command)
    {
        $otp = OTP::generate($command->origin, $command->mobile);

        $this->dispatcher->dispatch($otp->releaseEvents());
    }
}