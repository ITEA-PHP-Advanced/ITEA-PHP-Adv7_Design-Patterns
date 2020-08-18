<?php

namespace App\Security;

final class AuthenticationProtocolV1 implements AuthenticationInterface
{
    public function authenticate()
    {
        return 'AuthProtocolV1';
    }
}
