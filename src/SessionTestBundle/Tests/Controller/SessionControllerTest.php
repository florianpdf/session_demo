<?php

namespace SessionTestBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SessionControllerTest extends WebTestCase
{
    public function testUn()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/un');
    }

    public function testDeux()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deux');
    }

    public function testTrois()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/trois');
    }

}
