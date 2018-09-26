<?php


namespace App\Entity;

class Lamasticot
{
    private $id;
    private $name;
    private $size;
    private $cost;



    public function setId(int $id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setSize(int $size)
    {
        $this->size = $size;
    }
    public function getSize()
    {
        return $this->size;
    }


    public function setCost(int $cost)
    {
        $this->cost = $cost;
    }
    public function getCost()
    {
        return $this->cost;
    }



}
