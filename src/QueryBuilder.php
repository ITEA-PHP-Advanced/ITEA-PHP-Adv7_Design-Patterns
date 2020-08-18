<?php

declare(strict_types=1);

namespace App;

final class QueryBuilder
{
    private $fields = '*';
    private $tableName;
    private $condition;

    public function select($fields)
    {
        $this->fields = $fields;

        return $this;
    }

    public function from($tableName)
    {
        $this->tableName = $tableName;

        return $this;
    }

    public function where($condition)
    {
        $this->condition = $condition;

        return $this;
    }

    public function getQuery()
    {
        $sql = \sprintf('SELECT %s ', $this->fields);

        if (null === $this->tableName) {
            throw new \LogicException('Table name must be specified.');
        }

        $sql .= \sprintf('FROM %s', $this->tableName);

        if (null !== $this->condition) {
            $sql .= \sprintf(' WHERE %s', $this->condition);
        }

        $sql .= ';';

        return $sql;
    }
}
