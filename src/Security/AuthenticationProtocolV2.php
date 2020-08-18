<?php

namespace App\Security;

final class AuthenticationProtocolV2 implements AuthenticationInterface
{
    public function authenticate()
    {
        return 'AuthProtocolV2';
    }
}
