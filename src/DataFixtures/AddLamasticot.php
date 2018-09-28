<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Lamasticot;

class AddLamasticot extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $lamasticot1 = new lamasticot();
        $lamasticot1->setName('Maurice');
        $lamasticot1->setSize('100');
        $lamasticot1->setCost('2000');
        $lamasticot1->setFur('brun');
        $lamasticot1->setObject('Poutine');

        $manager->persist($lamasticot1);


        $lamasticot2 = new lamasticot();
        $lamasticot2->setName('Robert');
        $lamasticot2->setSize('30');
        $lamasticot2->setCost('100');
        $lamasticot2->setFur('brun');
        $lamasticot2->setObject('darkvador');

        $manager->persist($lamasticot2);

        $lamasticot3 = new lamasticot();
        $lamasticot3->setName('Phillipe');
        $lamasticot3->setSize('200');
        $lamasticot3->setCost('5000');
        $lamasticot3->setFur('brun');
        $lamasticot3->setObject('thug');

        $manager->persist($lamasticot3);


        $manager->flush();
    }
}
