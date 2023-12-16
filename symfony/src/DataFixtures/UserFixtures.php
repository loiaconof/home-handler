<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture implements FixtureGroupInterface
{
    public function load(ObjectManager $manager): void
    {
        $user = (new User())
            ->setUsername('user')
            ->setPassword('password');
        $manager->persist($user);

        $manager->flush();
    }

    public static function getGroups(): array
    {
        return [
            'dev',
        ];
    }
}
