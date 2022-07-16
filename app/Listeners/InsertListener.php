<?php

namespace App\Listeners;

use App\Events\InsertEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;

class InsertListener
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
     * @param  \App\Events\InsertEvent  $event
     * @return void
     */
    public function handle(InsertEvent $event)
    {
        $data = $event->details;

        Mail::to('topssurat301@gmail.com')->send(new \App\Mail\TestMail($data));
    }
}
