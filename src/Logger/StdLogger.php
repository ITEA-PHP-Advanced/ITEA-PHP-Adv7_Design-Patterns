<?php

declare(strict_types=1);

namespace App\Logger;

final class StdLogger implements LoggerInterface
{
    public function log($message, $context = [])
    {
        echo $message . \PHP_EOL;
    }
}
