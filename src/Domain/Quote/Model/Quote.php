<?php


namespace App\Domain\Quote\Model;

use App\Domain\Customer\Model\Customer;
use DateTime;

/**
 * Class Quote
 * @package App\Domain\Quote\Model
 */
class Quote
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var DateTime
     */
    private $date;

    /**
     * @var Customer
     */
    private $customer;

    /**
     * Quote constructor.
     * @param int $id
     * @param string $name
     * @param DateTime $date
     * @param Customer $customer
     */
    public function __construct(int $id, string $name, DateTime $date, Customer $customer)
    {
        $this->id = $id;
        $this->name = $name;
        $this->date = $date;
        $this->customer = $customer;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     */
    public function setDate(DateTime $date): void
    {
        $this->date = $date;
    }

    /**
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     */
    public function setCustomer(Customer $customer): void
    {
        $this->customer = $customer;
    }
}
