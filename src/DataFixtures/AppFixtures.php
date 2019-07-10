<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Product;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        //Création de 20 produits

        for ($i = 0; $i < 20; $i++) {
            $product = new Product();
            $product->setName('product '.$i);
            $product->setDescription('Contrairement à une opinion repandue, le Lorem Ipsum n est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la litterature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans.');
            $product->setIsAvailable(1);
            $product->setnbProductsInStock(random_int(1,50));
            $product->setUpdateDate(new \DateTime('10/07/2019'));
            $product->setPriceProduct(random_int(1,200));
            $manager->persist($product);
        }

        $manager->flush();
    }
}
