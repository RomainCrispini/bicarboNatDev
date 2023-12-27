<?php

namespace App\DataFixtures;

use App\Entity\Ingredient;
use App\Entity\Recipe;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Ingredients
        $ingredients = [];
        for ($i = 1; $i <= 100; $i++) {
            $faker = Factory::create('fr_FR');
            $ingredient = new Ingredient();
            $ingredient->setName($faker->name())
                ->setPrice(mt_rand(0, 100));

            $ingredients[] = $ingredient;

            $manager->persist($ingredient);
        }


        // Recipes
        for ($j = 0; $j < 25; $j++) {
            $recipe = new Recipe();
            $recipe->setName($faker->word())
                ->setDescription($faker->text(300))
                ->setNbPeople(mt_rand(5, 15))
                ->setDifficulty(mt_rand(1, 5))
                ->setIsFavorite(mt_rand(0, 1) == 1 ? true : false)
                ->setPrice(mt_rand(1, 1000))
                ->setTime(mt_rand(1, 1440));

            for ($k = 0; $k < mt_rand(5, 15); $k++) {
                $recipe->addIngredient($ingredients[mt_rand(0, count($ingredients) - 1)]);
            }

            $manager->persist($recipe);
        }

        $manager->flush();
    }
}
