<?php

namespace Tests\AppBundle\Controller;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\TestCaseTest;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * @test
 */
class DefaultControllerTest extends WebTestCase
{
    /**
     * @test
     */
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Welcome to Symfony', $crawler->filter('#container h1')->text());
    }
}
