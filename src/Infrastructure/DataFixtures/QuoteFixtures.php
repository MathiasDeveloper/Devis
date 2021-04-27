<?php

namespace App\Infrastructure\DataFixtures;

use App\Infrastructure\Entity\Customer;
use App\Infrastructure\Entity\Quote;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class QuoteFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        $quotes = [];
        for($i = 0; $i < 10; $i++){
            $quotes[$i] = new Quote();
            $quotes[$i]->setName($faker->word());
            $quotes[$i]->setDate($faker->date('d-m-Y'));
            $customer = new Customer();
            $quotes[$i]->setCustomer($customer);
            $manager->persist($quotes[$i]);
        }
        $manager->flush();
    }
}
