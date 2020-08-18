<?php

declare(strict_types=1);

namespace App\Config;

final class CachedAppConfig extends AppConfig
{
    private $cache;

    public function getConfig()
    {
        if (null === $this->cache) {
            $this->cache = parent::getConfig();
        }

        return $this->cache;
    }
}
