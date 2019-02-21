<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultUserTest extends WebTestCase
{
   public function testSomething()
   {
       // créer un client
       $client = static::createClient();
       // se rendre à l'URL `/student/`
       $crawler = $client->request('GET', '/login');
       // vérifier que le serveur répond un code HTTP 200
       $this->assertSame(200, $client->getResponse()->getStatusCode());
       // vérifier que le texte `Student index` se trouve dans la balise `h1`
       $this->assertContains('Password', $crawler->filter('body')->text());
       $this->assertContains('Email', $crawler->filter('body')->text());
   }
}
