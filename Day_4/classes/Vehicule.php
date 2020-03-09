<?php

abstract class Vehicule
{
    protected float $vitesse = 0;
    protected int $masse;
    protected string $energie;

    public function Ec() : float
    {
        return 0.5 * $this->masse * pow($this->vitesse, 2);
    }

    abstract public function test();
}