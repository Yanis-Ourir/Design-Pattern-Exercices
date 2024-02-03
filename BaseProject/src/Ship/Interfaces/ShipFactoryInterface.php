<?php

namespace App\Ship\Interfaces;

interface ShipFactoryInterface
{
    public function createBoat() : ShipInterface;
}