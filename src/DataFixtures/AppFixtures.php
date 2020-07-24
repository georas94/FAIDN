<?php

namespace App\DataFixtures;

use Faker;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $faker = Faker\Factory::create('fr_FR');
        for ($i=0; $i< 10; $i++) { 
           
            $user = (new User())
            ->setEmail($faker->safeEmail())
            ->setUsername($faker->name())
            ->setRoles(["USER"])
            ->setPhone($faker->mobileNumber())
            ->setCountry($faker->countryCode())
            ->setCreatedAt("2014-02-25 08:37:17")
            ->setNewsletter(1)
            ->setPassword($faker->password());
            $manager->persist($user);

        }
        $manager->flush();
    }
}
