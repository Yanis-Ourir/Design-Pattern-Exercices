<?php

namespace App\Meal\Interfaces;

interface BurgerInterface
{
    public function setPrice(int $price) : BurgerInterface;
    public function getPrice() : int;
    public function setBurgerType(string $burgerType) : BurgerInterface;
    public function getBurgerType() : string;
}