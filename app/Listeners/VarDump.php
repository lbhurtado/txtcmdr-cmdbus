<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/27/15
 * Time: 19:57
 */

namespace App\Listeners;

use App\Events\OTPWasGenerated;
use App\Events\PINWasConfirmed;
use App\Events\LoadWasPosted;

class VarDump extends Listener
{
    public function whenOTPWasGenerated(OTPWasGenerated $event)
    {
        var_dump($event);
    }

    public function whenPINWasConfirmed(PINWasConfirmed $event)
    {
        var_dump($event);
    }

    public function whenLoadWasPosted(LoadWasPosted $event)
    {
        var_dump($event);
    }
}