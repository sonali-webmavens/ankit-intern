<?php

namespace App\Http\Controllers;

use App\Mail\SendDemoEmai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
{
    $demo = new \stdClass();
    $demo->sender = 'SenderName';
    $demo->receiver = 'ReceiverName';

    Mail::to('receiver@example.com')->send(new SendDemoEmai($demo));

    return 'Email was sent';
}
}
