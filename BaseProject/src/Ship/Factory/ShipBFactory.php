<?php

namespace App\Ship\Factory;

use App\Ship\Interfaces\ShipFactoryInterface;
use App\Ship\Interfaces\ShipInterface;
use App\Ship\ShipB;

class ShipBFactory implements ShipFactoryInterface
{
    public function createBoat() : ShipInterface
    {
        return new ShipB();
    }
}