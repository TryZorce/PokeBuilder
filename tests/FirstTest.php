<?php

namespace App\Tests;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Doctrine\ORM\EntityManagerInterface;

class FirstTest extends WebTestCase
{
    private $client;
    private $entityManager;



    public function testGoodLogin(): void
    {

        $client = static::createClient();
        $entityManager = $client->getContainer()->get('doctrine')->getManager();
        $crawler = $client->request('GET', '/login');

        $form = $crawler->selectButton('test')->form([
            'email' => 'test@gmail.com',
            'password' => 'azertyuiop',
        ]);

        $client->submit($form);

        $this->assertResponseRedirects('/'); 
        $client->followRedirect();
        $this->assertResponseIsSuccessful();
    }
}
