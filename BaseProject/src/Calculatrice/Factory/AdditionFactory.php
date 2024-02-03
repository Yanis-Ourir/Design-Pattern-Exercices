<?php

namespace App\Calculatrice\Factory;

use App\Calculatrice\AdditionCalculation;
use App\Calculatrice\Interfaces\CalculationInterface;

class AdditionFactory extends OperationFactory
{

    public function createCalculation(int $number1, int $number2) : CalculationInterface
    {
        return new AdditionCalculation($number1, $number2);
    }

}