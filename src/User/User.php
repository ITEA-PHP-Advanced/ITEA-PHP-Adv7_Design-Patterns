<?php

declare(strict_types=1);

namespace App\User;

final class User
{
    const STATUS_ACTIVE = 1;
    const STATUS_BLOCKED = 2;

    private $email;
    private $status;

    public function __construct($email)
    {
        $this->email = $email;
        $this->status = self::STATUS_ACTIVE;
    }

    public function block()
    {
        $this->status = self::STATUS_BLOCKED;
    }

    public function isActive()
    {
        return self::STATUS_ACTIVE === $this->status;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
