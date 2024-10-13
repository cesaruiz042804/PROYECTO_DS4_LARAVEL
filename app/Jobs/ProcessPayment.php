<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

use Stripe\Stripe;
use Stripe\PaymentMethod;
use Stripe\Exception\ApiErrorException;
use Stripe\Charge;
use Stripe\Card;
use Illuminate\Http\Request;

use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Foundation\Bus\Dispatchable; 
use Predis\Client;
use Illuminate\Support\Facades\Log;


class ProcessPayment implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    use Queueable;
    public $stripeToken;

    public function __construct($stripeToken)
    {
        
    }

    public function handle()
    {   
    

        
    }
}
