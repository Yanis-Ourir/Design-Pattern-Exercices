<?php

namespace App\PCBuilder;

use App\PCBuilder\Interfaces\BuilderInterface;
use App\PCBuilder\Interfaces\ComputerInterface;

class PCBuilder implements BuilderInterface
{
    private array $components = [];

    public function getComputer() : ComputerInterface
    {
        return new Desktop($this->components);
    }

    public function setPart($components) : self
    {
       $this->components[] = $components;
       return $this;
    }
}