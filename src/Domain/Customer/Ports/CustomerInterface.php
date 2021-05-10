<?php


namespace App\Domain\Customer\Ports;


use App\Domain\Customer\Model\Customer;

/**
 * Interface CustomerInterface
 * @package App\Domain\Customer\Ports
 */
interface CustomerInterface
{
    /**
     * @return array<Customer>
     */
    public function getCustomers(): array;

    /**
     * @param int $id
     * @return Customer
     */
    public function getCustomer(int $id): Customer;
}
