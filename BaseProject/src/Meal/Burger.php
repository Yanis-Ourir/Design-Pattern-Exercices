<?php

namespace App\Meal;

use App\Meal\Interfaces\BurgerInterface;

class Burger implements BurgerInterface
{
    private int $price;
    private string $burgerType;

    public function __construct(int $price, string $burgerType)
    {
        $this->price = $price;
        $this->burgerType = $burgerType;
    }

    #[\Override] public function setPrice(int $price): BurgerInterface
    {
        $this->price = $price;
        return $this;
    }

    #[\Override] public function getPrice(): int
    {
        return $this->price;
    }

    #[\Override] public function setBurgerType(string $burgerType): BurgerInterface
    {
        $this->burgerType = $burgerType;
        return $this;
    }

    #[\Override] public function getBurgerType(): string
    {
        return $this->burgerType;
    }
}