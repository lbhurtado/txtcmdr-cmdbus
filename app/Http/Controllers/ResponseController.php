<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/28/15
 * Time: 18:39
 */

namespace App\Http\Controllers;

use App\Commands\PostResponseCommand;

class ResponseController extends Controller
{
    public function store($code, $question, $answer) {

        $command = new PostResponseCommand($code, $question, $answer);

        $this->commandBus->execute($command);
    }
}