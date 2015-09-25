<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/24/15
 * Time: 13:29
 */

namespace Acme\Jobs;

use App\Classes\Commanding\CommandHandler;
use Acme\Jobs\Job;
use App\Classes\Eventing\EventDispatcher;

class JobFilledCommandHandler extends CommandHandler
{
    protected $job;

    public function __construct(Job $job, EventDispatcher $dispatcher)
    {
        $this->job = $job;

        parent::__construct($dispatcher);
    }

    public function handle($command)
    {
        $job = $this->job->findOrFail($command->jobId);
        $job->archive();
        $this->dispatcher->dispatch($job->releaseEvents());
    }
}