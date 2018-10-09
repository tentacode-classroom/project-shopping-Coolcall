<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Lamasticot;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FurRepository")
 */
class Fur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $color;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Lamasticot", mappedBy="color")
     */
    private $fur;

    public function __construct()
    {
        $this->fur = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @return Collection|Lamasticot[]
     */
    public function getFur(): Collection
    {
        return $this->fur;
    }

    public function addFur(Lamasticot $fur): self
    {
        if (!$this->fur->contains($fur)) {
            $this->fur[] = $fur;
            $fur->setColor($this);
        }

        return $this;
    }

    public function removeFur(Lamasticot $fur): self
    {
        if ($this->fur->contains($fur)) {
            $this->fur->removeElement($fur);
            // set the owning side to null (unless already changed)
            if ($fur->getColor() === $this) {
                $fur->setColor(null);
            }
        }

        return $this;
    }
}
