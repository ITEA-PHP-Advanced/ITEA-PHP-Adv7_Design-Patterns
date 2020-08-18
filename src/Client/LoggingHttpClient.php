<?php

declare(strict_types=1);

namespace App\Client;

final class LoggingHttpClient extends HttpClientDecorator
{
    private $logger;

    public function request($method, $uri, $options = [])
    {
        $response = $this->decorated->request($method, $uri, $options);

        $this->logger->log('Response.', [
            'response' => \json_encode($response),
        ]);

        return $response;
    }
}
