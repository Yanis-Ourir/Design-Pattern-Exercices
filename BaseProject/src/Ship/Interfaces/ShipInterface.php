<?php

namespace App\Ship\Interfaces;

use App\Ship\HeroShip;

interface ShipInterface
{
    public function sendDamage(HeroShip $heroShip) : int;
}