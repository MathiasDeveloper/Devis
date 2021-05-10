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
        $this->assertEquals(1,  $this->quote->getId());
    }

    public function testSetId()
    {
        $this->quote->setId(2);
        $this->assertEquals(2, $this->quote->getId());
    }

    public function testGetCustomer()
    {
        $this->assertInstanceOf(Customer::class, $this->quote->getCustomer());
    }

    public function testSetName()
    {
        $this->quote->setName('test 2');
        $this->assertEquals('test 2', $this->quote->getName());
    }

    public function testSetCustomer()
    {
        $this->quote->setCustomer(new Customer(2, "name"));
        $this->assertInstanceOf(Customer::class, $this->quote->getCustomer());
    }

    public function testGetDate()
    {
        $this->assertInstanceOf(\DateTime::class, $this->quote->getDate());
    }

    public function testGetName()
    {
        $this->assertEquals('Test', $this->quote->getName());
    }

    public function testSetDate()
    {
        $this->quote->setDate(new \DateTime('now'));
        $this->assertInstanceOf(\DateTime::class, $this->quote->getDate());
    }
}
