<?php


namespace App\Infrastructure\Adapter\Api\Quote;


use App\Domain\Quote\Model\Quote;
use App\Domain\Quote\Ports\QuoteInterface;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class GetQuote implements QuoteInterface
{
    private $client;
    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @inheritDoc
     * @return array
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     * @throws DecodingExceptionInterface
     */
    public function getQuotes(): array
    {
        $response = $this->client->request('GET', 'http://127.0.0.1:8000/api/quotes');
        return $response->toArray();
    }

    /**
     * @inheritDoc
     */
    public function getQuote(int $id): Quote
    {

    }
}
