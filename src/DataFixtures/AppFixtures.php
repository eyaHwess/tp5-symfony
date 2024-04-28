<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\EtudiantFactory;
use App\Factory\InstitutFactory;
use App\Factory\GroupeFactory;
use App\Factory\UtilisateurFactory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        EtudiantFactory ::createMany(10);
        InstitutFactory ::createMany(10);
        GroupeFactory ::createMany(10);
        UtilisateurFactory ::createMany(10);
        $manager->flush();
    }
}
