<?php

namespace Meal;


use App\Meal\Burger;
use App\Meal\Drink;
use App\Meal\Meal;
use PHPUnit\Framework\TestCase;


final class MealBuilderTest extends TestCase
{
    public function testThatMealBuilderWorks()
    {
        $mealBuilder = new Meal();
        $meal = $mealBuilder->prepareMeal()
            ->addBurger(new Burger(10, 'Végé'))
            ->addDrink(new Drink(1, 'Eau'))
            ->getMeal();

        $mealBuilder2 = new Meal();
        $meal2 = $mealBuilder2->prepareMeal()
            ->addBurger(new Burger(12, 'Chicken'))
            ->addDrink(new Drink(2, 'Sprite'))
            ->getMeal();

        $this->assertTrue(method_exists($mealBuilder, 'prepareMeal'), 'Class does not have method prepareMeal');
        $this->assertTrue(method_exists($mealBuilder, 'addBurger'), 'Class does not have method addBurger');
        $this->assertTrue(method_exists($mealBuilder, 'addDrink'), 'Class does not have method addDrink');
        $this->assertTrue(method_exists($mealBuilder, 'getMeal'), 'Class does not have method getMeal');

        $this->assertEquals($meal, "Végé, Eau 11€");
        $this->assertEquals($meal2, "Chicken, Sprite 14€");

    }
}