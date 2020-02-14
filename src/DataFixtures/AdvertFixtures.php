<?php

namespace App\DataFixtures;

use App\Entity\Advert;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Service\PriceEstimator;

class AdvertFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $price = new PriceEstimator();
        $year = 2006;
        $km = 2500;
        $days = 180;
        for ($i = 1; $i <= 10; $i++) {
            $advert = new Advert();
            $advert -> setTitle("Voiture $i")
                ->setDescription("Incroyable AUDI A$i")
                ->setCity("Mexico")
                ->setCarYear($year + $i)
                ->setNbKm($km + $i)
                ->setNbDays($days +$i)
                ->setPrice($price->getCarEstimation($year + $i, $km + $i, $days + $i));

            $manager->persist($advert);
        }

            $manager->flush();
    }
}
