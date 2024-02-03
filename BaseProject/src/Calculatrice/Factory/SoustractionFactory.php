<?php

namespace App\Calculatrice\Factory;

use App\Calculatrice\Interfaces\CalculationInterface;
use App\Calculatrice\SoustractionCalculation;

class SoustractionFactory extends OperationFactory
{
    public function createCalculation(int $number1, int $number2) : CalculationInterface
    {
        return new SoustractionCalculation($number1, $number2);
    }
}