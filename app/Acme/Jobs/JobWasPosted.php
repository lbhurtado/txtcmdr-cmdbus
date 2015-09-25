<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/23/15
 * Time: 13:49
 */

namespace Acme\Jobs;

use Acme\Jobs\Job;
use App\Events\Event;
use Illuminate\Queue\SerializesModels;


class JobWasPosted extends Event
{
    use SerializesModels;

    public $job;

    /**
     * JobWasPosted constructor.
     * @param $job
     */
    public function __construct(Job $job)
    {
        $this->job = $job;
    }
}