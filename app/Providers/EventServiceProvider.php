<?php

namespace App\Providers;

use App\Events\ResponseWasDuplicated;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

use App\Listeners\SMSNotifier;
use App\Listeners\Logger;
use App\Listeners\VarDump;
use App\Listeners\CreditLoad;

use App\Events\OTPWasGenerated;
use App\Events\PINWasConfirmed;
use App\Events\LoadWasPosted;
use App\Events\SurveyWasPosted;
use App\Events\ResponseWasPosted;
use App\Events\ResponseWasUpdated;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        OTPWasGenerated::class => [
            SMSNotifier::class,
            Logger::class,
            VarDump::class,
        ],
        PINWasConfirmed::class => [
            SMSNotifier::class,
            Logger::class,
            VarDump::class,
        ],
        LoadWasPosted::class => [
            SMSNotifier::class,
            Logger::class,
            VarDump::class,
            //CreditLoad::class,
        ],
        SurveyWasPosted::class => [
            Logger::class,
            VarDump::class,
        ],
        ResponseWasPosted::class => [
            Logger::class,
            VarDump::class,
        ],
        ResponseWasUpdated::class => [
            Logger::class,
            VarDump::class,
        ],
        ResponseWasDuplicated::class => [
            Logger::class,
            VarDump::class,
        ],
    ];

    /*
    public function register()
    {
        Event::listen("App\Events\*", function () {
            var_dump($this->listen);
        });
    }
    */
}
