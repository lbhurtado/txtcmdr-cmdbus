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
use App\Events\ResponseWasPosted;
use App\Events\ResponseWasUpdated;

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
        \Log::info("Survey was posted: {$event->survey->description} ({$event->survey->code}).");
    }

    public function whenResponseWasPosted(ResponseWasPosted $event) {
        \Log::info("Response was posted: {$event->response->code} [{$event->response->question}:{$event->response->answer}].");
    }

    public function whenResponseWasUpdated(ResponseWasUpdated $event) {
        \Log::info("Response was updated: {$event->response->code} [{$event->response->question}:{$event->response->answer}].");
    }
}