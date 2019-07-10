<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Product;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        //Création des catégories :
        $sport = new Category();
        $sport->setName('Sport');
        $manager->persist($sport);

        $iTech = new Category();
        $iTech->setName('iTech');
        $manager->persist($iTech);

        $music = new Category();
        $music->setName('Music');
        $manager->persist($music);

        $cinema = new Category();
        $cinema->setName('Cinema');
        $manager->persist($cinema);

        $manager->flush();


        //Création de 10 produits dans la catégorie cinema :
        for ($i = 0; $i < 10; $i++) {
            $product = new Product();
            $product->setName('product '.$i);
            $product->setDescription('Contrairement à une opinion repandue, le Lorem Ipsum n est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la litterature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans.');
            $product->setIsAvailable(1);
            $product->setnbProductsInStock(random_int(1,50));
            $product->setUpdateDate(new \DateTime('10/07/2019'));
            $product->setPriceProduct(random_int(1,200));
            $product->setCategory($cinema);
            $manager->persist($product);
        }

        $manager->flush();

        //Création de 5 produits dans la catégorie iTech :
        for ($i = 0; $i < 10; $i++) {
            $product = new Product();
            $product->setName('product '.$i);
            $product->setDescription('Contrairement à une opinion repandue, le Lorem Ipsum n est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la litterature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans.');
            $product->setIsAvailable(1);
            $product->setnbProductsInStock(random_int(1,50));
            $product->setUpdateDate(new \DateTime('10/07/2019'));
            $product->setPriceProduct(random_int(1,200));
            $product->setCategory($iTech);
            $manager->persist($product);
        }

        $manager->flush();

        //Création de 30 produits dans la catégorie music :
        for ($i = 0; $i < 10; $i++) {
            $product = new Product();
            $product->setName('product '.$i);
            $product->setDescription('Contrairement à une opinion repandue, le Lorem Ipsum n est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la litterature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans.');
            $product->setIsAvailable(1);
            $product->setnbProductsInStock(random_int(1,50));
            $product->setUpdateDate(new \DateTime('10/07/2019'));
            $product->setPriceProduct(random_int(1,200));
            $product->setCategory($music);
            $manager->persist($product);
        }

        $manager->flush();

        //Création de 15 produits dans la catégorie sport:
        for ($i = 0; $i < 10; $i++) {
            $product = new Product();
            $product->setName('product '.$i);
            $product->setDescription('Contrairement à une opinion repandue, le Lorem Ipsum n est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la litterature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans.');
            $product->setIsAvailable(1);
            $product->setnbProductsInStock(random_int(1,50));
            $product->setUpdateDate(new \DateTime('10/07/2019'));
            $product->setPriceProduct(random_int(1,200));
            $product->setCategory($sport);
            $manager->persist($product);
        }

        $manager->flush();

    }
}
