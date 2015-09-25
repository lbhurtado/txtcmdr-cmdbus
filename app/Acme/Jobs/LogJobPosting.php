<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/24/15
 * Time: 07:38
 */

namespace Acme\Jobs;

use Acme\Jobs\JobWasPosted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogJobPosting
{
    /**
     * Handle the event.
     *
     * @param  JobWasPosted  $event
     * @return void
     */
    public function handle(JobWasPosted $event)
    {
        $eventName = str_replace('\\', '.', get_class($event));
        \Log::info("$eventName was fired, yeah!");
    }
}