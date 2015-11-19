<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 19/11/15
 * Time: 13:11
 */

namespace App\Commands;

use App\Classes\Commanding\CommandHandler;
use App\Classes\Setting;

class PostSettingCommandHandler extends CommandHandler
{
    public function handle($command)
    {
        $setting = Setting::post(
            $command->code,
            json_encode($command->json),
            $command->description
        );

        $this->dispatcher->dispatch($setting->releaseEvents());
    }
}