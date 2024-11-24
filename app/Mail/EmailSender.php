<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class EmailSender extends Mailable
{
    use Queueable, SerializesModels;

    public $amount;
    public $cardType;
    public $name;

    public function __construct($name, $amount, $cardType)
    {
        $this->amount = $amount;
        $this->cardType = $cardType;
        $this->name = $name;
    }

    public function build()
    {
        $fechaActual = now();
        $fechaFormateada = $fechaActual->format('d/m/Y'); // Formatear la fecha en el formato dd/mm/yyyy
        $fechaFormateada = explode(' ', $fechaFormateada)[0];
        return $this->view('mails.email-send')
        ->with(['name' => $this->name])
        ->with(['amount' => $this->amount])
        ->with(['cardType' => $this->cardType])
        ->with(['date_actually' => $fechaFormateada])
        ->subject('Tienda online Shirini-e');

        return $email;
    }
}
