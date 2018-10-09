<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Lamasticot;
use App\Entity\Fur;

class AddLamasticot extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $fur1 = new fur();
        $fur1->setColor('brun');

        $manager->persist($fur1);

        $fur2 = new fur();
        $fur2->setColor('noir');

        $manager->persist($fur2);

        $lamasticot1 = new lamasticot();
        $lamasticot1->setName('Maurice');
        $lamasticot1->setSize('100');
        $lamasticot1->setCost('2000');
        $lamasticot1->setColor($fur1);
        $lamasticot1->setObject('Poutine');
        $lamasticot1->setImage('Poutine_lama.jpg');

        $manager->persist($lamasticot1);


        $lamasticot2 = new lamasticot();
        $lamasticot2->setName('Robert');
        $lamasticot2->setSize('30');
        $lamasticot2->setCost('100');
        $lamasticot2->setColor($fur1);
        $lamasticot2->setObject('darkvador');
        $lamasticot2->setImage('vador_lama.jpg');

        $manager->persist($lamasticot2);

        $lamasticot3 = new lamasticot();
        $lamasticot3->setName('Phillipe');
        $lamasticot3->setSize('200');
        $lamasticot3->setCost('5000');
        $lamasticot3->setColor($fur1);
        $lamasticot3->setObject('thug');
        $lamasticot3->setImage('thug_lama.jpeg');

        $manager->persist($lamasticot3);


        $lamasticot4 = new lamasticot();
        $lamasticot4->setName('Gilbert');
        $lamasticot4->setSize('1500');
        $lamasticot4->setCost('1000');
        $lamasticot4->setColor($fur1);
        $lamasticot4->setObject('pleure');
        $lamasticot4->setImage('lama_qui_pleure.png');

        $manager->persist($lamasticot4);


        $lamasticot5 = new lamasticot();
        $lamasticot5->setName('Albert');
        $lamasticot5->setSize('5');
        $lamasticot5->setCost('809');
        $lamasticot5->setColor($fur2);
        $lamasticot5->setObject('koala');
        $lamasticot5->setImage('lama_koala.png');

        $manager->persist($lamasticot5);


        $manager->flush();
    }
}
