<?php

namespace App\Meal;

use App\Meal\Interfaces\BurgerInterface;
use App\Meal\Interfaces\DrinkInterface;
use App\Meal\Interfaces\MealInterface;

class Meal implements MealInterface
{
    private array $meal = [];

    public function prepareMeal()
    {
          return $this;
    }

    public function addBurger(BurgerInterface $burger) : MealInterface
    {
        $this->meal[] = $burger;
        return $this;
    }

    public function getMeal() : string
    {
        $mealResult = '';
        $mealDrink = '';
        $mealPrice = 0;
        foreach($this->meal as $meal){
            if($meal instanceof DrinkInterface) {
                $mealDrink = $meal->getDrinkType();
            }
            if($meal instanceof BurgerInterface) {
                $mealResult = $meal->getBurgerType();
            }
            $mealPrice += $meal->getPrice();
        }
        return $mealResult . ', ' . $mealDrink . ' ' . $mealPrice . '€';
    }

    #[\Override] public function addDrink(DrinkInterface $drink): MealInterface
    {
        $this->meal[] = $drink;
        return $this;
    }
}