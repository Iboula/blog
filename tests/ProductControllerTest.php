<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class ProductControllerTest extends WebTestCase
{
    public function testSomething()
    {
        $client = static::createClient();
        $client->request('GET', '/product');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Welcome Product');
    }

    // public function testAuthAutorisation()
    // {
    //     $client = static::createClient();
    //     $client->request('GET', '/auth');
    //     $this->assertResponseStatusCodeSame(Response::HTTP_UNAUTHORIZED);
    // }

    // public function testRedirectToLogin()
    // {
    //     $client = static::createClient();
    //     $client->request('GET', '/auth');
    //     $this->assertResponseRedirects('/login');
    // }
}
