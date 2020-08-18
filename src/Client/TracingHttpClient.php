<?php

declare(strict_types=1);

namespace App\Client;

final class TracingHttpClient extends HttpClientDecorator
{
    public function request($method, $uri, $options = [])
    {
        $start = \microtime(true);

        $this->decorated->request($method, $uri, $options);

        $end = \microtime(true);

        // TODO save result
    }
}
