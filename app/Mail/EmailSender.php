<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon;

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
        return $this->subject('Payment Confirmation')
            ->view('mails.email-send', [
                'name' => $this->name,
                'amount' => $this->amount,
                'cardType' => $this->cardType,
            ]);
    }

    /*
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '¡Pago confirmado!',
        );
    }

    public function content(): Content
    {
        $fechaActual = Carbon::now();
        
        $fechaFormateada = $fechaActual->format('d/m/Y'); // Formatear la fecha en el formato dd/mm/yyyy

        return new Content(
            view: 'mails/email-send',
            with: [
                'amount' => $this->amount,
                'cardType' => $this->cardType,
                'name' => $this->name,
                'date_actually' => $fechaFormateada,
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
        */
}
