<?php

namespace App\PCBuilder;

use App\PCBuilder\Interfaces\MasterInterface;
use App\PCBuilder\Interfaces\BuilderInterface;
use App\PCBuilder\Interfaces\ComputerInterface;

class Master implements MasterInterface
{
    /**
     * @var BuilderInterface
     */
    private BuilderInterface $builder;

    /**
     * @return ComputerInterface
     */
    public function build(): ComputerInterface
    {
        return $this->builder->getComputer();
    }

    /**
     * @return BuilderInterface
     */
    public function getBuilder(): BuilderInterface
    {
        return $this->builder;
    }

    /**
     * @param BuilderInterface $builder
     */
    public function setBuilder(BuilderInterface $builder): void
    {
        $this->builder = $builder;
    }
}