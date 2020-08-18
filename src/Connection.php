<?php

namespace App;

final class Connection
{
    private static $instance;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function printObjectId()
    {
        echo \sprintf("Object ID is: %s\n", \spl_object_id($this));
    }
}
