<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/23/15
 * Time: 11:38
 */

namespace App\Http\Controllers;

use Acme\Jobs\JobFilledCommand;
use Acme\Jobs\PostJobListingCommand;
use Illuminate\Support\Facades\Response;

class JobsController extends Controller
{
    /**
     * Post new job listing
     *
     * @return Response
     */
    public function store(){

        $input = $this->request->only('title', 'description');

        $command = new PostJobListingCommand($input['title'], $input['description']);

        $this->commandBus->execute($command);
    }


    /**
     * Set job as filled
     */
    public function delete($jobId) {

        $command = new JobFilledCommand($jobId);

        $this->commandBus->execute($command);
    }
}