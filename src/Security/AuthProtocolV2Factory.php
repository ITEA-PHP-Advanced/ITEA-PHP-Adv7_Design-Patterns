<?php

declare(strict_types=1);

namespace App\Security;

final class AuthProtocolV2Factory implements AuthenticationProtocolFactoryInterface
{
    public function create()
    {
        // some complex logic of object creating...

        return new AuthenticationProtocolV2();
    }
}
