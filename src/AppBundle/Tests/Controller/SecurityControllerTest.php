<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{
    public function testForm()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/login');
    }

}
