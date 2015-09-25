<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/24/15
 * Time: 07:34
 */

namespace Acme\Jobs;

use Acme\Jobs\JobWasPosted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailJobPosting
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  JobWasPosted  $event
     * @return void
     */
    public function handle(JobWasPosted $event)
    {
        // Access the podcast using $event->podcast...
        var_dump('Job posting was emailed!!!');
    }
}