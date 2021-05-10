<?php

namespace App\Infrastructure\Entity;

use App\Infrastructure\Repository\CustomerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CustomerRepository::class)
 */
#[ApiResource]
class Customer
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToOne(targetEntity=Quote::class, mappedBy="Customer", cascade={"persist", "remove"})
     */
    private $quote;

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

    public function getQuote(): ?Quote
    {
        return $this->quote;
    }

    public function setQuote(Quote $quote): self
    {
        // set the owning side of the relation if necessary
        if ($quote->getCustomer() !== $this) {
            $quote->setCustomer($this);
        }

        $this->quote = $quote;

        return $this;
    }
}
