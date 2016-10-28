<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EtapaControllerTest extends WebTestCase
{
    public function testForm()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/etapa/form');
    }

    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/etapa/index');
    }

}
