<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderRepository::class)]
#[ORM\Table(name: '`order`')]
class Order
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'orders')]
    private ?User $relation_user = null;

    #[ORM\Column]
    private ?int $order_num = null;

    #[ORM\Column(length: 255)]
    private ?string $pain = null;

    #[ORM\Column(length: 255)]
    private ?string $viande = null;

    #[ORM\Column(length: 255)]
    private ?string $sauce = null;

    #[ORM\Column(length: 255)]
    private ?string $frites = null;

    #[ORM\Column(length: 255)]
    private ?string $boisson = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRelationUser(): ?User
    {
        return $this->relation_user;
    }

    public function setRelationUser(?User $relation_user): static
    {
        $this->relation_user = $relation_user;

        return $this;
    }

    public function getOrderNum(): ?int
    {
        return $this->order_num;
    }

    public function setOrderNum(int $order_num): static
    {
        $this->order_num = $order_num;

        return $this;
    }

    public function getPain(): ?string
    {
        return $this->pain;
    }

    public function setPain(string $pain): static
    {
        $this->pain = $pain;

        return $this;
    }

    public function getViande(): ?string
    {
        return $this->viande;
    }

    public function setViande(string $viande): static
    {
        $this->viande = $viande;

        return $this;
    }

    public function getSauce(): ?string
    {
        return $this->sauce;
    }

    public function setSauce(string $sauce): static
    {
        $this->sauce = $sauce;

        return $this;
    }

    public function getFrites(): ?string
    {
        return $this->frites;
    }

    public function setFrites(string $frites): static
    {
        $this->frites = $frites;

        return $this;
    }

    public function getBoisson(): ?string
    {
        return $this->boisson;
    }

    public function setBoisson(string $boisson): static
    {
        $this->boisson = $boisson;

        return $this;
    }
}
