<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/28/15
 * Time: 08:28
 */

namespace App\Http\Controllers;

use App\Commands\PostSurveyCommand;

class Ask4QuestionsController extends Controller
{
    public function store($code) {
        $request = $this->request->all();
        $description = $request['description'];
        unset($request['description']);
        $data = json_encode($request);
        $command = new PostSurveyCommand($code, $description, $data);

        $this->commandBus->execute($command);
    }
}