<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    // public function testAddition()
    // {
    //     $calculator = new Calculator();
    //     $this->assertEquals(5, $calculator->add(2, 3));
    // }

    // public function testSubtraction()
    // {
    //     $calculator = new Calculator();
    //     $this->assertEquals(2, $calculator->subtract(5, 3));
    // }

    // public function testMultiplication(){
    //     $calculator = new Calculator();
    //     $this->assertEquals(6, $calculator->multiply(2, 3));
    // }

    // suppose i want to test an object whether it is an instance of a Calculator class or not
    public function testInstanceOf(){
        $calculator = new Calculator();
        $this->assertInstanceOf(Calculator::class, $calculator);
    }
}
