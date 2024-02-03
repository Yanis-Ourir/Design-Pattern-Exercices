<?php 

namespace App\MySQLQuery;

use App\MySQLQuery\Interfaces\QueryBuilderInterface;

class MySQLQuery implements QueryBuilderInterface
{
    private array $query;

    public function select(string $table, array $fields): QueryBuilderInterface
    {
        $this->query['select'] = 'SELECT ' . implode(', ', $fields) . ' FROM ' . $table;
        return $this;
    }

    #[\Override] public function reset(): void
    {
        $this->query = [];
    }

    #[\Override] public function where(string $field, string $value, string $operator = '='): QueryBuilderInterface
    {
        $this->query['where'] = 'WHERE ' . $field . ' ' . $operator . ' ' . $value;
        return $this;
    }

    #[\Override] public function limit(int $start, int $stop): QueryBuilderInterface
    {
        $this->query['limit'] = 'LIMIT ' . $start . ', ' . $stop;
        return $this;
    }

    #[\Override] public function get() : string
    {
        return implode(' ', $this->query);
    }
}