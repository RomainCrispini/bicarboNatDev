<?php

namespace App\DataFixtures;

use App\Entity\Ingredient;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i <= 50; $i++) {
            $faker = Factory::create('fr_FR');
            $ingredient = new Ingredient();
            $ingredient->setName($faker->email())
                ->setPrice(mt_rand(0, 100));
            $manager->persist($ingredient);
        }

        $manager->flush();
        echo $faker->email();
    }
}
