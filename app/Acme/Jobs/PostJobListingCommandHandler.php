<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/23/15
 * Time: 12:29
 */

namespace Acme\Jobs;

use Acme\Commanding\CommandHandler;
use Acme\Jobs\Job;
use Acme\Eventing\EventDispatcher;

class PostJobListingCommandHandler implements CommandHandler
{

    protected $dispatcher;

    /**
     * PostJobListingCommandHandler constructor.
     * @param $job
     */
    public function __construct(EventDispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    /**
     * Handle the command
     *
     * @param $command
     * 4@return mixed
     */
    public function handle($command)
    {
        $job = Job::post($command->title, $command->description);

        $this->dispatcher->dispatch($job->releaseEvents());
    }
}