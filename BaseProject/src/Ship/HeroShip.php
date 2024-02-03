<?php

namespace App\Ship;

class HeroShip
{
    private int $points;
    public function __construct($points)
    {
        $this->points = $points;
    }

    public function getHp() : int
    {
        return $this->points;
    }
}