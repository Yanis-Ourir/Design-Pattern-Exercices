<?php

namespace App\PCBuilder;

use App\PCBuilder\Interfaces\ComputerInterface;

class Desktop implements ComputerInterface
{
    private array $components;

    public function __construct(array $components) {
        $this->components = $components;
    }

    public function getComponent($components) : object
    {
        foreach($this->components as $component) {
            if($component instanceof $components) {
                return $component;
            }
        }
        Throw new \Exception("Component not found");
    }
}