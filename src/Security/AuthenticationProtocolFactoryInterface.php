<?php

declare(strict_types=1);

namespace App\Security;

interface AuthenticationProtocolFactoryInterface
{
    /**
     * @return AuthenticationInterface
     */
    public function create();
}
