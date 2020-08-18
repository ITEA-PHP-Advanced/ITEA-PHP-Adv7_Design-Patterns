<?php

declare(strict_types=1);

namespace App\Security;

final class AuthProtocolV1Factory implements AuthenticationProtocolFactoryInterface
{
    public function create()
    {
        return new AuthenticationProtocolV1();
    }
}
