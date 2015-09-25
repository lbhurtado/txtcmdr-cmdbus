<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/24/15
 * Time: 11:42
 */

namespace app\Listeners;

use Acme\Jobs\JobWasFilled;
use Acme\Jobs\JobWasPosted;
use App\Listeners\Listener;
use App\Classes\OTPWasCreated;

class EmailNotifier extends Listener
{
    public function whenJobWasPosted(JobWasPosted $event)
    {
        var_dump("Posted: do something related to email: " . $event->job->title);
    }

    public function whenJobWasFilled(JobWasFilled $event) {
        var_dump("Filled: do something related to email: " . $event->job->title);
    }

    public function whenOTPWasCreated(OTPWasCreated $event) {
        var_dump("OTP: do something related to email: " . $event->otp->getRandomCode());
    }
}