<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 04/11/15
 * Time: 10:32
 */

namespace App\Commands;

use App\Classes\Commanding\CommandHandler;
use App\Classes\Passage;

class PostPassageCommandHandler extends CommandHandler
{
    public function handle($command)
    {
        $passage = Passage::post(
            $command->origin,
            $command->destination,
            urldecode($command->passage)
        );

        $this->dispatcher->dispatch($passage->releaseEvents());
    }
}