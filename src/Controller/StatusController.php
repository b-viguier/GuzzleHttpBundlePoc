<?php

namespace App\Controller;

use GuzzleHttp\ClientInterface;
use M6Web\Bundle\GuzzleHttpBundle\EventDispatcher\GuzzleHttpEvent;
use Symfony\Component\HttpFoundation\Response;

class StatusController
{
    private $timing = 0;

    public function newRelicStatus(ClientInterface $client): Response
    {
        $response = $client->get('https://status.newrelic.com');

        $statusCode = $response->getStatusCode();

        return new Response(
            "<html><body>Status Code: $statusCode<br/>Timing: {$this->timing}</body></html>"
        );
    }

    public function onM6WebGuzzleHttp(GuzzleHttpEvent $event): void
    {
        $this->timing = $event->getExecutionTime();
    }
}
