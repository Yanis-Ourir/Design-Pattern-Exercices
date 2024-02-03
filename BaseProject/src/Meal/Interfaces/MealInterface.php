<?php

namespace App\Meal\Interfaces;

interface MealInterface
{
    public function prepareMeal();
    public function getMeal() : string;

    public function addBurger(BurgerInterface $burger) : MealInterface;
    public function addDrink(DrinkInterface $drink) : MealInterface;
}