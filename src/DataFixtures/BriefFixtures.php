<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Brief;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class BriefFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        require_once 'vendor/autoload.php';

        $faker = Factory::create('fr_FR');
        
        for($i = 0; $i<23; $i++) {
            $brief = new Brief();

            $brief->setNom($faker->lastName())
                 ->setPrenom($faker->firstName())
                 ->setEntreprise($faker->company())
                 ->setTelephone($faker->phoneNumber())
                 ->setEmail($faker->email())
                 ->setMessage($faker->text())
            ;
    
            $manager->persist($brief); 
        }
        
        $manager->flush();
    }
}
