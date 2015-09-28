<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/28/15
 * Time: 18:53
 */

namespace App\Commands;


use App\Classes\Commanding\CommandHandler;
use App\Classes\Response;

class PostResponseCommandHandler extends CommandHandler
{
    public function handle($command)
    {
        $response = Response::post($command->code, $command->question, $command->answer);

        $this->dispatcher->dispatch($response->releaseEvents());
    }
}