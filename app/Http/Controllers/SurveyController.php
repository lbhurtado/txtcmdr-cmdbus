<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/28/15
 * Time: 08:28
 */

namespace App\Http\Controllers;

use App\Commands\PostSurveyCommand;

class SurveyController extends Controller
{
    public function store($code)
    {
        $description = $this->pullDescriptionFromRequestAndEncodeData($data);

        $command = new PostSurveyCommand($code, $description, $data);

        $this->commandBus->execute($command);
    }

    private function pullDescriptionFromRequestAndEncodeData(&$data)
    {
        $request = $this->request->all();

        $description = array_pull($request, 'description');

        $data = json_encode($request);

        return $description;
    }
}