<?php

class Vehicule
{
    public float $vitesse = 0;
    public int $masse;
    public string $energie;

    public function Ec()
    {
        return 0.5 * $this->masse * pow($this->vitesse, 2);
    }

}