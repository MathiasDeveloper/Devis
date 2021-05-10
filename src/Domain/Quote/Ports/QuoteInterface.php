<?php


namespace App\Domain\Quote\Ports;


use App\Domain\Quote\Model\Quote;

/**
 * Interface QuoteInterface
 * @package App\Domain\Quote\Ports
 */
interface QuoteInterface
{
    /**
     * @return array<Quote>
     */
    public function getQuotes(): array;

    /**
     * @param int $id
     * @return Quote
     */
    public function getQuote(int $id): Quote;
}
