<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/26/15
 * Time: 21:49
 */

namespace App\Listeners;

use App\Events\OTPWasGenerated;
use App\Events\PINWasConfirmed;
use App\Events\LoadWasPosted;
use App\Events\SurveyWasPosted;

class Logger extends Listener
{
    public function whenOTPWasGenerated(OTPWasGenerated $event)
    {
        \Log::info("OTP {$event->otp->getRandomCode()} was generated for {$event->otp->getMobile()}");
    }

    public function whenPINWasConfirmed(PINWasConfirmed $event) {
        \Log::info("PIN was confirmed for {$event->otp->getMobile()}");
    }

    public function whenLoadWasPosted(LoadWasPosted $event) {
        \Log::info("Load was credited to {$event->load->mobile}.");
    }

    public function whenSurveyWasPosted(SurveyWasPosted $event) {
        \Log::info("Survey was posted: {$event->survey->code}.");
    }
}