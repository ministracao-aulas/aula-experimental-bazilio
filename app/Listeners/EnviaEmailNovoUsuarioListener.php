<?php

namespace App\Listeners;

use App\Events\NovoUsuarioEvent;
use App\Http\Controllers\EnviaEmailController;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class EnviaEmailNovoUsuarioListener
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
     * @param  NovoUsuarioEvent  $event
     * @return void
     */
    public function handle(NovoUsuarioEvent $event)
    {
        (new EnviaEmailController)->envia();
    }
}
