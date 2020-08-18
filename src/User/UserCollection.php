<?php

declare(strict_types=1);

namespace App\User;

final class UserCollection implements \IteratorAggregate
{
    private $users;

    public function __construct(...$users)
    {
        $this->users = $users;
    }

    public function filter(callable $predirate)
    {
        return new self(...\array_filter($this->users, $predirate));
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->users);
    }
}
