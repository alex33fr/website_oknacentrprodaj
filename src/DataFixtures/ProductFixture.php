<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;


class ProductFixture extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');

            for($i = 1; $i <= 10; $i++) {
                $category = new Category();
                $category
                    ->setTitle($faker->sentence())
                    ->setDescription($faker->paragraph());

                $manager->persist($category);


            for ($j = 1; $j <= mt_rand(8, 25); $j++){
                $product = new Product();

                $desc = '<p>' . join($faker->paragraphs(5), '</p><p>') . '</p>';

                $product->setTitle($faker->sentence())
                    ->setColor($faker->sentence())
                    ->setModel($faker->sentence())
                    ->setImage($faker->imageUrl($width = 640, $height = 480))
                    ->setDescOne($desc)
                    ->setDescTwo($desc)
                    ->setCreatedAt($faker->dateTimeBetween('-6 months'))
                    ->setCategory($category);

                $manager->persist($product);
            }
            }

        $manager->flush();
    }
}

