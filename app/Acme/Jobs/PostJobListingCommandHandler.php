<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/23/15
 * Time: 12:29
 */

namespace Acme\Jobs;

use App\Classes\Commanding\CommandHandler;
use Acme\Jobs\Job;
use App\Classes\Eventing\EventDispatcher;

class PostJobListingCommandHandler extends CommandHandler
{
    public function handle($command)
    {
        $job = Job::post($command->title, $command->description);
        $this->dispatcher->dispatch($job->releaseEvents());
    }
}