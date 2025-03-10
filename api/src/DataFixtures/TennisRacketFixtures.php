<?php
namespace App\DataFixtures;

use App\Entity\TennisRacket;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TennisRacketFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $rackets = [
            [
                'brand'    => 'Wilson',
                'model'    => 'Blade',
                'weight'   => 300,
                'headSize' => 100,
                'price'    => 250.0,
            ],
            [
                'brand'    => 'Babolat',
                'model'    => 'Pure Aero',
                'weight'   => 300,
                'headSize' => 98,
                'price'    => 200.0,
            ],
            [
                'brand'    => 'Head',
                'model'    => 'Speed Pro',
                'weight'   => 310,
                'headSize' => 100,
                'price'    => 220.0,
            ],
        ];

        foreach ($rackets as $data) {
            $racket = new TennisRacket();
            $racket->setBrand($data['brand']);
            $racket->setModel($data['model']);
            $racket->setWeight($data['weight']);
            $racket->setHeadSize($data['headSize']);
            $racket->setPrice($data['price']);

            $manager->persist($racket);
        }

        $manager->flush();
    }
}
