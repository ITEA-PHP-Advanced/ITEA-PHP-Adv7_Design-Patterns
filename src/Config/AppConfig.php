<?php

declare(strict_types=1);

namespace App\Config;

use Symfony\Component\Yaml\Yaml;

class AppConfig
{
    private $configFilePath;

    public function __construct($configFilePath)
    {
        $this->configFilePath = $configFilePath;
    }

    public function getConfig()
    {
        return Yaml::parseFile($this->configFilePath);
    }
}
