<?php

namespace App\Meal\Interfaces;

interface DrinkInterface
{
    public function setPrice(int $price) : DrinkInterface;
    public function getPrice() : int;
    public function setDrinkType(string $drinkType) : DrinkInterface;
    public function getDrinkType() : string;

}