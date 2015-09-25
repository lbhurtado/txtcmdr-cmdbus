<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'Acme\Jobs\*' => [
   //         'Acme\Jobs\EmailJobPosting',
   //         'Acme\Jobs\LogJobPosting',
            'App\Listeners\EmailNotifier',
            'App\Listeners\ReportListener',
        ],
        'App\Classes\OTPWasCreated' => [
            'App\Listeners\EmailNotifier',
        ]
    ];

    public function register()
    {
        Event::listen("App\Classes\*", function () {
            var_dump("listening...");
        });
    }
}
