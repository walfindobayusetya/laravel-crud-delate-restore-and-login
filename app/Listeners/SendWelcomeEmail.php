<?php

namespace App\Listeners;

use App\Events\UserRegisterd;
use App\Mail\WelcomeEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendWelcomeEmail
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
     * @param  \App\Events\UserRegisterd  $event
     * @return void
     */
    public function handle(UserRegisterd $event)
    {
        Mail::send(new WelcomeEmail($event->email));
    }
}
