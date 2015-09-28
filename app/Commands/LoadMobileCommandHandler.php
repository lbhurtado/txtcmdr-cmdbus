<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/27/15
 * Time: 21:23
 */

namespace App\Commands;

use App\Classes\Commanding\CommandHandler;
use App\Classes\Load;

class LoadMobileCommandHandler extends CommandHandler
{
    public function handle($command)
    {
        $load = Load::post($command->origin, $command->mobile, $command->amount);
        $this->dispatcher->dispatch($load->releaseEvents());
    }
}