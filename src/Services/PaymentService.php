<?php

namespace App\Services;

class PaymentService
{
    public function processPayment($amount)
    {
        // Simulating an external API call
        return "Processed payment of $$amount";
    }
}
