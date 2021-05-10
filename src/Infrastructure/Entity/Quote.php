<?php

namespace App\Infrastructure\Entity;

use App\Infrastructure\Repository\QuoteRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QuoteRepository::class)
 * @ApiResource(
 *     collectionOperations={"get"={"normalization_context"={"groups"="quote:list"}}},
 *     paginationEnabled=false
 * )
 */
class Quote
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    #[Groups(['quote:list', 'quote:item'])]
    private $id;

    /**
     * @ORM\Column(type="string", length=55)
     */
    #[Groups(['quote:list', 'quote:item'])]
    private $name;

    /**
     * @ORM\Column(type="date")
     */
    #[Groups(['quote:list', 'quote:item'])]
    private $date;

    /**
     * @ORM\OneToOne(targetEntity=Customer::class, inversedBy="quote", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    #[Groups(['quote:list', 'quote:item'])]
    private $Customer;

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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getCustomer(): ?Customer
    {
        return $this->Customer;
    }

    public function setCustomer(Customer $Customer): self
    {
        $this->Customer = $Customer;

        return $this;
    }
}
