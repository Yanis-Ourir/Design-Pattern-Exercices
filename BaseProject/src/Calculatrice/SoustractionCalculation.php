<?php

namespace App\Calculatrice;

use App\Calculatrice\Interfaces\CalculationInterface;

class SoustractionCalculation implements CalculationInterface
{
    protected $number1;
    protected $number2;

    public function __construct(int $number1, int $number2)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }
    #[\Override] public function calculationType(): int
    {
        return $this->number1 - $this->number2;
    }
}