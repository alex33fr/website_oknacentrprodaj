<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 15; $i++){
            $product = new Product();

            $product->setTitle("Название")
                    ->setColor("Цвет")
                    ->setImage("http://placehold.it/350x150")
                    ->setDescOne("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam atque consequuntur cum exercitationem fuga iste itaque neque placeat possimus quaerat quibusdam, similique sit sunt, tenetur unde veritatis. Accusamus atque explicabo incidunt odit, repellat sunt voluptate! A delectus doloremque dolores, dolorum esse maxime omnis saepe sed sint voluptate! At, vero.")
                    ->setDescTwo("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam atque consequuntur cum exercitationem fuga iste itaque neque placeat possimus quaerat quibusdam, similique sit sunt, tenetur unde veritatis. Accusamus atque explicabo incidunt odit, repellat sunt voluptate! A delectus doloremque dolores, dolorum esse maxime omnis saepe sed sint voluptate! At, vero.")
                    ->setCreatedAt(new \DateTime());

            $manager->persist($product);
        }

        $manager->flush();

    }
}
