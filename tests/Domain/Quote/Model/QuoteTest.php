<?php

namespace App\Tests\Domain\Quote\Model;

use App\Domain\Customer\Model\Customer;
use App\Domain\Quote\Model\Quote;
use PHPUnit\Framework\TestCase;

/**
 * Class QuoteTest
 * @package App\Tests\Domain\Quote\Model
 */
class QuoteTest extends TestCase
{
    /**
     * @var Quote
     */
    private $quote;

    protected function setUp(): void
    {
        $this->quote = new Quote(1, "Test", new \DateTime('now'),  new Customer(1, "test"));
    }

    public function testGetId()
    {
    }

    public function testSetId()
    {
    }

    public function testGetCustomer()
    {
    }

    public function testSetName()
    {
    }

    public function testSetCustomer()
    {
    }

    public function testGetDate()
    {
    }

    public function testGetName()
    {
    }

    public function testSetDate()
    {
    }
}
