<?php

namespace App\Ship\Factory;

use App\Ship\Interfaces\ShipFactoryInterface;
use App\Ship\ShipU;
use App\Ship\Interfaces\ShipInterface;

class ShipUFactory implements ShipFactoryInterface
{
    public function createBoat() : ShipInterface
    {
        return new ShipU();
    }
}