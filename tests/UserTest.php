<?php

use PHPUnit\Framework\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    public function testUserName()
    {
        $user = new User(1, "John Doe");

        $this->assertEquals("John Doe", $user->getName());
    }
}
