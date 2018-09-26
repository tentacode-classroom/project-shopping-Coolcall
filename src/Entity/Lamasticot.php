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
    public function getId($id)
    {
        return $this->id;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName($name)
    {
        return $this->name;
    }

    public function setSize(int $size)
    {
        $this->size = $size;
    }
    public function getSize($size)
    {
        return $this->size;
    }


    public function setCost(int $cost)
    {
        $this->cost = $cost;
    }
    public function getCost($cost)
    {
        return $this->cost;
    }



}
