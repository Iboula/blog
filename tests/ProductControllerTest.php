<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductControllerTest extends WebTestCase
{
    public function testSomething()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/product');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Hello ProductController');
    }
}
