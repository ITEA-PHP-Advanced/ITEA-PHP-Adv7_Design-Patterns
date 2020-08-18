<?php

declare(strict_types=1);

namespace App\Logger;

final class NullLogger implements LoggerInterface
{
    public function log($message, $context = [])
    {
        // Do nothing with message and context.
    }
}
