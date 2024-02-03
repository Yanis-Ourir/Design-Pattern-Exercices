<?php

namespace App\Calculatrice\Factory;

use App\Calculatrice\Factory\AdditionFactory;
use App\Calculatrice\Factory\SoustractionFactory;



class OperationFactory
{
    protected string $operationType;
    public function __construct(string $operationType) {
        $this->operationType = $operationType;
    }

    public function createFactory() : object
    {
        $factory = "App\\Calculatrice\\Factory\\" . ucfirst(strtolower($this->operationType)) . 'Factory';
        return new $factory($this->operationType);
    }
}