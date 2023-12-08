<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $userPasswordHasherInterface;

    public function __construct (UserPasswordHasherInterface $userPasswordHasherInterface) 
    {
        $this->userPasswordHasherInterface = $userPasswordHasherInterface;
    }

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        
            $user = new User();
            $user->setEmail('test@test.fr');
            $user->setRoles(['ROLE_USER']);
            $user->setPassword(
                $this->userPasswordHasherInterface->hashPassword(
                    $user, "test"
                )
            );
            $manager->persist($user);

            $user = new User();
            $user->setEmail('demo@demo.fr');
            $user->setRoles(['ROLE_USER']);
            $user->setPassword(
                $this->userPasswordHasherInterface->hashPassword(
                    $user, "demo"
                )
            );
            $manager->persist($user);

            $user = new User();
            $user->setEmail('admin@free.fr');
            $user->setRoles(['ROLE_ADMIN']);
            $user->setPassword(
                $this->userPasswordHasherInterface->hashPassword(
                    $user, "admin"
                )
            );
            $manager->persist($user);

        $manager->flush();
    }
}
