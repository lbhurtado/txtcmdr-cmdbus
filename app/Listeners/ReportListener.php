<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/24/15
 * Time: 12:11
 */

namespace app\Listeners;

use Acme\Jobs\JobWasFilled;
use Acme\Jobs\JobWasPosted;
use App\Listeners\Listener;

class ReportListener extends Listener
{
    public function whenJobWasPosted(JobWasPosted $event)
    {
        var_dump("Posted: do something related to reporting: " . $event->job->title);
    }

    public function whenJobWasArchived(JobWasFilled $event)
    {
        var_dump("Archived: do something related to reporting: " . $event->job->title);
    }
}