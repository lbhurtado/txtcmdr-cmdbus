<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/23/15
 * Time: 11:38
 */

namespace App\Http\Controllers;

use App\Commands\GenerateOTPCommand;
use App\Commands\ConfirmPINCommand;
use App\Commands\LoadMobileCommand;

class TextCommanderController extends Controller
{
    public function challenge($origin, $mobile)
    {
        $command = new GenerateOTPCommand($origin, $mobile);

        $this->commandBus->execute($command);
    }

    public function confirm($origin, $mobile, $pin)
    {
        $command = new ConfirmPINCommand($origin, $mobile, $pin);

        $this->commandBus->execute($command);
    }

    public function load($origin, $mobile, $amount)
    {
        $command = new LoadMobileCommand($origin, $mobile, $amount);

        $this->commandBus->execute($command);
    }
}