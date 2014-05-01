<?php

namespace Acme\UserBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testLogin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/login');
    }

    public function testRegistration()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/registration');
    }

}
