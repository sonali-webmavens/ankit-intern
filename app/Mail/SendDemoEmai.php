<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendDemoEmai extends Mailable
{
    use Queueable, SerializesModels;

    use Queueable, SerializesModels;

    public $demo;

    public function __construct($demo)
    {
        $this->demo = $demo;
    }

    public function build()
    {
        return $this->view('mails.demo')
                    ->subject('Demo Email')
                    ->from('your@example.com'); // Optionally set the sender
    }
}
