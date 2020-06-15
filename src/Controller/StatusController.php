<?php

namespace App\Controller;

use GuzzleHttp\ClientInterface;
use Symfony\Component\HttpFoundation\Response;

class StatusController
{
    public function newRelicStatus(ClientInterface $client): Response
    {
        $response = $client->get('https://status.newrelic.com');

        $statusCode = $response->getStatusCode();

        return new Response(
            "<html><body>Status Code: $statusCode</body></html>"
        );
    }
}
