<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\Mime\Email;
use Illuminate\Support\Facades\Storage;

class ConfirmationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $token;
    
    public function __construct($token)
    {
        $this->token = $token;
    }

    public function build()
    {
        return $this->view('mails.confirmationMail')
        ->with(['token' => $this->token]);

        return $email;
    }

    
}
