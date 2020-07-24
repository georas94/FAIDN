<?php

namespace App\Tests\Repository;

use App\Repository\UserRepository;
use Liip\TestFixturesBundle\Test\FixturesTrait;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class UserRepositoryTest extends WebTestCase{
    

    use FixturesTrait;
    public function testCount(){

        $kernel = self::bootKernel();
        $this->loadFixtures([AppFixtures::class]);
        $container = self::$container; 
        $em = $container->get('doctrine.orm.entity_manager'); 
        $users = $em->getRepository(User::class)->count([]);
        $this->assertEquals(10, $users);

    }

}