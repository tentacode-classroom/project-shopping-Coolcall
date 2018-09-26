<?php

namespace App\Repository;

use App\Entity\Lamasticot;

class LamasticotRepository
{
    private $lamasticots;

    public function __construct()
    {
        $lamasticot1 = new lamasticot();
        $lamasticot1->setId(11);
        $lamasticot1->setName('Maurice');
        $lamasticot1->setSize('100');
        $lamasticot1->setCost('2000');


        $lamasticot2 = new lamasticot();
        $lamasticot2->setId(12);
        $lamasticot2->setName('Robert');
        $lamasticot2->setSize('30');
        $lamasticot2->setCost('100');


        $lamasticot3 = new lamasticot();
        $lamasticot3->setId(13);
        $lamasticot3->setName('Phillipe');
        $lamasticot3->setSize('200');
        $lamasticot3->setCost('5000');

        $this->lamasticots = [
            $lamasticot1,
            $lamasticot2,
            $lamasticot3,
        ];
    }

    public function findAll(): array
    {
        return $this->lamasticots;
    }

    public function findOneById(int $id): lamasticot
    {
        foreach ($this->lamasticots as $lamasticot) {
            if ($lamasticot->getId() === $id) {
                return $lamasticot;
            }
        }
    }
}


 ?>
