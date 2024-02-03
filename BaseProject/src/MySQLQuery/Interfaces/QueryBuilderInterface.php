<?php 

namespace App\MySQLQuery\Interfaces;

interface QueryBuilderInterface
{
    public function select(string $table, array $fields) : QueryBuilderInterface;
    public function reset() : void;
    public function where(string $field, string $value, string $operator = '=') : QueryBuilderInterface;
    public function limit(int $start, int $stop) : QueryBuilderInterface;
    public function get();
}
