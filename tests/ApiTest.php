<?php

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class ApiTest extends TestCase
{
    public function testGetUsers()
    {
        $client = new Client(['base_uri' => 'https://jsonplaceholder.typicode.com']);

        $response = $client->get('/users');

        $this->assertEquals(200, $response->getStatusCode());

        $data = json_decode($response->getBody(), true);
        $this->assertIsArray($data);
    }
}
