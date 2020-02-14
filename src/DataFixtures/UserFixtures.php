<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 10; $i++) {
            $user = new User();
            $user->setEmail("user$i@partiel.com")
                ->setRoles(["ROLE_USER"])
                ->setLogin("user$i")
                ->setPassword("password$i");

            $manager->persist($user);
        }

        $admin = new User();
            $admin->setEmail("admin$i@partiel.com")
                ->setRoles(["ROLE_ADMIN"])
                ->setLogin("admin$i")
                ->setPassword("password$i");

        $manager->persist($admin);

        $manager->flush();
    }
}
