<?php

abstract class Personnage
{
    public string $nom;
    public int $pointsVie;
    public int $endurance;
    public int $intelligence;
    public int $force; // 0 à 10
    public int $defence;
    public int $experience;
    protected bool $mort = false;

    protected function attaquerPhysique($autrePersonnage)
    {
        $autrePersonnage->pointsVie -= $this->force - $autrePersonnage->defence * rand(0, $autrePersonnage->defense - 1);
        $this->experience++;
        DeadFactory::isDead($autrePersonnage);
    }
}
