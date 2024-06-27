<?php

namespace App\Mail\mails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendDemoEmai extends Mailable
{
    use Queueable, SerializesModels;

    public $demo;

    public function __construct($demo)
    {
        $this->demo = $demo;
    }

    public function build()
    {
        return $this->view('mails.emo')
                    ->subject('Demo Email')
                    ->from('your@example.com'); // Optionally set the sender
    }


}
