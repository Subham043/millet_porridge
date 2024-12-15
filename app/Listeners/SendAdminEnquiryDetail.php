<?php

namespace App\Listeners;

use App\Events\EnquiryCreated;
use App\Mail\SendAdminEnquiryDetailMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendAdminEnquiryDetail implements ShouldQueue
{
    use InteractsWithQueue;

    public $tries = 3;
    
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(EnquiryCreated $event): void
    {
        Mail::to(config('app.admin_email'))->send(new SendAdminEnquiryDetailMail($event->name, $event->email, $event->phone, $event->subject, $event->message));
    }
}
