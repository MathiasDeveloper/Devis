<?php

namespace App\Controller;

use App\Infrastructure\Adapter\Api\Quote\GetQuote;
use http\Client\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @param HttpClientInterface $client
     * @return Response
     * @throws TransportExceptionInterface
     */
    public function index(HttpClientInterface $client): Response
    {
        $quote = new GetQuote($client);
        $test = $quote->getQuotes();
        dump($test);
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
