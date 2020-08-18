<?php

declare(strict_types=1);

namespace App\Client;

use App\Logger\LoggerInterface;

final class LoggingHttpClient extends HttpClientDecorator
{
    private $logger;

    public function __construct(HttpClient $client, LoggerInterface  $logger)
    {
        parent::__construct($client);
        $this->logger = $logger;
    }

    public function request($method, $uri, $options = [])
    {
        $response = $this->decorated->request($method, $uri, $options);

        $this->logger->log('Response.', [
            'response' => \json_encode($response),
        ]);

        return $response;
    }
}
