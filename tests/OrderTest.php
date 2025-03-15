<?php

use PHPUnit\Framework\TestCase;
use App\Order;
use App\Services\PaymentService;

class OrderTest extends TestCase
{
    public function testCheckoutWithMockPaymentService()
    {
        // Create a mock for PaymentService
        $mockPaymentService = $this->createMock(PaymentService::class);

        // Define behavior of mock method
        $mockPaymentService->method('processPayment')
            ->with(200) // Expecting $100 as input
            ->willReturn('Processed payment of $200');

        // Inject mock into Order
        $order = new Order($mockPaymentService);

        // Assert the expected output
        $this->assertEquals('Processed payment of $100', $order->checkout(100));
    }
}
