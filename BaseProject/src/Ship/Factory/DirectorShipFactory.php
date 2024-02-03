<?php

namespace App\Ship\Factory;

use App\Ship\Interfaces\ShipFactoryInterface;

class DirectorShipFactory
{
    private $shipType;
    public function __construct(string $shipType) {
        $this->shipType = $shipType;
    }
    public function createFactory() : ShipFactoryInterface
    {
        $factory = "App\\Ship\\Factory\\" . "Ship" . strtoupper($this->shipType) . "Factory";
        if(!class_exists($factory)) {
            throw new \Exception("Factory not found");
        }
        return new $factory();
    }
}