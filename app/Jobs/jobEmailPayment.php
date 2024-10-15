<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\EmailSender;

class jobEmailPayment implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    use Queueable;
    
    public $email;
    public $name;
    public $amountDecimal;
    public $cardType;

    public function __construct($email, $name, $amountDecimal, $cardType)
    {
        $this->email = $email;
        $this->name = $name;
        $this->amountDecimal = $amountDecimal;
        $this->cardType = $cardType;
        Log::debug($this->email);
    }

    public function handle()
    {   
        try{
            Mail::to($this->email)->send(new EmailSender($this->name, $this->amountDecimal, $this->cardType));
        } catch(\Exception $e){
            Log::debug($e->getMessage());
        }
        
    }
}
