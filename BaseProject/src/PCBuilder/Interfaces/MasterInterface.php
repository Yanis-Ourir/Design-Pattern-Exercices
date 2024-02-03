<?php

namespace App\PCBuilder\Interfaces;

interface MasterInterface
{
    public function build() : ComputerInterface;
    public function setBuilder(BuilderInterface $builder);
    public function getBuilder();
}