<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Contacts;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ContactsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        require_once 'vendor/autoload.php';

        $faker = Factory::create('fr_FR');
        
        for($i = 0; $i<50; $i++) {
            $contact = new Contacts();

            $contact->setNom($faker->lastName())
                    ->setPrenom($faker->firstName())
                    ->setEntreprise($faker->company())
                    ->setEmail($faker->email())
                    ->setMessage($faker->text())
            ;
    
            $manager->persist($contact); 
        }
        
        $manager->flush();
    }
}
