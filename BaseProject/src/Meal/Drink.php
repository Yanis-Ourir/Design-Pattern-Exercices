<?php

namespace App\Meal;

use App\Meal\Interfaces\DrinkInterface;

class Drink implements DrinkInterface
{
    private int $price;
    private string $drinkType;

    public function __construct(int $price, string $drinkType)
    {
        $this->price = $price;
        $this->drinkType = $drinkType;
    }

    #[\Override] public function setPrice(int $price): DrinkInterface
    {
        $this->price = $price;
        return $this;
    }

    #[\Override] public function getPrice(): int
    {
        return $this->price;
    }

    #[\Override] public function setDrinkType(string $drinkType): DrinkInterface
    {
        $this->drinkType = $drinkType;
        return $this;
    }

    #[\Override] public function getDrinkType(): string
    {
        return $this->drinkType;
    }
}