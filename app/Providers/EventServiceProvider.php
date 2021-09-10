<?php

namespace App\Providers;

use App\Events\NovoUsuarioEvent;
use App\Listeners\EnviaEmailNovoUsuarioListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
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
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        NovoUsuarioEvent::class => [
            EnviaEmailNovoUsuarioListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        // Event::listen(
        //     NovoUsuarioEvent::class,
        //     [EnviaEmailNovoUsuarioListener::class, 'handle']
        // );
    }
}
