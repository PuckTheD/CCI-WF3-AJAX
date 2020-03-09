<?php

class Magicien extends Personnage
{
    public int $pointsMagie;

    public function __construct($n)
    {
        $this->nom = $n;
        $this->pointsMagie = rand(6, 10);
        $this->pointsVie = rand(5, 8);
        $this->endurance = rand(1, 4);
        $this->intelligence = rand(7, 10);
        $this->force = rand(1, 5);
        $this->defence = rand(3, 6);
        $this->experience = rand(0, 10);
    }
}