<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InfoitemRepository")
 */
class Infoitem
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Section;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Text;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSection(): ?int
    {
        return $this->Section;
    }

    public function setSection(int $Section): self
    {
        $this->Section = $Section;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->Text;
    }

    public function setText(?string $Text): self
    {
        $this->Text = $Text;

        return $this;
    }
}
