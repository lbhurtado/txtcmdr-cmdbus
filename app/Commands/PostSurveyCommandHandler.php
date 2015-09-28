<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/28/15
 * Time: 08:34
 */

namespace App\Commands;

use App\Classes\Commanding\CommandHandler;
use App\Classes\Survey;

class PostSurveyCommandHandler extends CommandHandler
{
    public function handle($command)
    {
        $survey = Survey::post($command->code, $command->description, $command->data);

        $this->dispatcher->dispatch($survey->releaseEvents());
    }
}