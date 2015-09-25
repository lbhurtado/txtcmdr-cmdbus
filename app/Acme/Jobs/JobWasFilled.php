<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/24/15
 * Time: 12:16
 */

namespace Acme\Jobs;

use Acme\Jobs\Job;
use App\Events\Event;
use Illuminate\Queue\SerializesModels;

class JobWasFilled
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