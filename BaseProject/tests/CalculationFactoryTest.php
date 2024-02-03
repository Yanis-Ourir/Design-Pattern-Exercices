<?php

namespace Calculatrice;

use App\Calculatrice\Factory\AdditionFactory;
use App\Calculatrice\Factory\OperationFactory;
use App\Calculatrice\Factory\SoustractionFactory;
use PHPUnit\Framework\TestCase;

class CalculationFactoryTest extends TestCase
{
    public function testAdditionCalculate(){

        $number1 = 5;
        $number2 = 5;
        $factory = new OperationFactory('aDDition');
        $typeFactory  = $factory->createFactory();
        $entity = $typeFactory->createCalculation($number1 ,$number2);
        $entity->calculationType();

        $this->assertSame($number1 + $number2 ,$entity->calculationType());
    }
    public function testSoustractionCalculate(){

        $number1 = 5;
        $number2 = 5;
        $factory = new OperationFactory('soustractioN');
        $typeFactory  = $factory->createFactory();
        $entity = $typeFactory->createCalculation($number1 ,$number2);
        $entity->calculationType();

        $this->assertSame($number1 - $number2 ,$entity->calculationType());
    }
}