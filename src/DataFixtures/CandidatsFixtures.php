<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Candidats;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CandidatsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        require_once 'vendor/autoload.php';

        $faker = Factory::create('fr_FR');
        
        for($i = 0; $i<35; $i++) {
            $candidat = new Candidats();

            $candidat->setNom($faker->lastName())
                     ->setPrenom($faker->firstName())
                     ->setEmail($faker->email())
                     ->setMessage($faker->text())
            ;
    
            $manager->persist($candidat); 
        }
        
        $manager->flush();
    }
}

