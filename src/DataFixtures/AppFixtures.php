<?php

namespace App\DataFixtures;

use App\Entity\Formation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 50; $i++) :
            $formation = new Formation();

            $formation->setNom('Anglais-'. $i);
            $formation->setDescription('Formation anglais blah blah ' . $i);
            $formation->setLieux('Havre - ' . $i);

            $manager->persist($formation);
        endfor;

        $manager->flush();
    }
}
