<?php

declare(strict_types=1);

namespace App\Client;

abstract class HttpClientDecorator extends HttpClient
{
    protected $decorated;

    public function __construct(HttpClient $decorated)
    {
        $this->decorated = $decorated;
    }
}
