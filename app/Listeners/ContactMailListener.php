<?php

namespace App\Listeners;

use App\Mail\ContactMail;
use App\Events\ContactMailEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMailListener
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
     * @param  object  $event
     * @return void
     */
    public function handle(ContactMailEvent $event)
    {

        Mail::to('webaiidagency@gmail.com')->send( new ContactMail($event));
    
    }
}
