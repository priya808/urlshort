<?php

namespace App\listeners;

use App\event\userCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmail
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
     * @param  userCreated  $event
     * @return void
     */
    public function handle(userCreated $event)
    {
        //
        echo $event->email;
    }
}
