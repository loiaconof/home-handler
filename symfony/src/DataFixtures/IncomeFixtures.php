<?php

namespace App\DataFixtures;

use App\Entity\Income;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class IncomeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $income = (new Income)
            ->setAmount('100')
            ->setDate(new DateTime())
            ->setDescription('test');
        $manager->persist($income);
        $income = (new Income)
            ->setAmount('200')
            ->setDate(new DateTime())
            ->setDescription('test');
        $manager->persist($income);
        $income = (new Income)
            ->setAmount('300')
            ->setDate(new DateTime())
            ->setDescription('test');
        $manager->persist($income);

        $manager->flush();
    }
}
