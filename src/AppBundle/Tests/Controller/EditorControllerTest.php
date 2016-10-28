<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EditorControllerTest extends WebTestCase
{
    public function testPrincipal()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
    }

}
