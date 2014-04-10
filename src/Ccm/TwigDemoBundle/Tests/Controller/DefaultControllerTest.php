<?php

namespace Ccm\TwigDemoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hello/Drupal');

        $this->assertTrue($crawler->filter('html:contains("Hello Drupal")')->count() > 0);
    }
}
