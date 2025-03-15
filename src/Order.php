<?php

namespace App;

use App\Services\PaymentService;

class Order
{
    private $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function checkout($amount)
    {
        return $this->paymentService->processPayment($amount);
    }
}
