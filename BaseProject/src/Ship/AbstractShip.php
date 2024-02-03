<?php

namespace App\Ship;

use App\Ship\HeroShip;
use App\Ship\Interfaces\ShipInterface;

abstract class AbstractShip implements ShipInterface
{
    protected int $damage;

    public function sendDamage(HeroShip $heroShip) : int
    {
         return $heroShip->getHp() - $this->damage;
    }

}