<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Fur;
/**
 * @ORM\Entity(repositoryClass="App\Repository\LamasticotRepository")
 */
class Lamasticot
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $size;

    /**
     * @ORM\Column(type="integer")
     */
    private $cost;

    /**
     * @ORM\Column(type="string", length=55)
     */

    private $object;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="integer")
     */
    private $viewCounter = 0;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Fur", inversedBy="fur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $color;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getCost(): ?int
    {
        return $this->cost;
    }

    public function setCost(int $cost): self
    {
        $this->cost = $cost;

        return $this;
    }



    public function getObject(): ?string
    {
        return $this->object;
    }

    public function setObject(?string $object): self
    {
        $this->object = $object;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getViewCounter(): ?int
    {
        return $this->viewCounter;
    }

    public function setViewCounter(int $viewCounter): self
    {
        $this->viewCounter = $viewCounter;

        return $this;
    }

    public function incrementViewCounter()
   {

       $this->viewCounter++;
   }

    public function getColor(): ?Fur
    {
        return $this->color;
    }

    public function setColor(?Fur $color): self
    {
        $this->color = $color;

        return $this;
    }




}
