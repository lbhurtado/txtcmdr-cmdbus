<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/24/15
 * Time: 13:29
 */

namespace Acme\Jobs;

use Acme\Commanding\CommandHandler;
use Acme\Jobs\Job;
use Acme\Eventing\EventDispatcher;

class JobFilledCommandHandler implements CommandHandler
{
    protected $job;

    protected $dispatcher;

    /**
     * JobFilledCommandHandler constructor.
     * @param $job
     */
    public function __construct(Job $job, EventDispatcher $dispatcher)
    {
        $this->job = $job;

        $this->dispatcher = $dispatcher;

    }


    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $job = $this->job->findOrFail($command->jobId);

        $job->archive();

        $this->dispatcher->dispatch($job->releaseEvents());
    }
}