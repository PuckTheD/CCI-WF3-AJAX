<?php

class Voiture
{
    public string $couleur;
    public int $vitesse = 0;
    public int $masse;
    public int $nbrRoues = 4;
    public string $energie;
    public string $marque;
    public string $modele;

    public function __construct(string $c)
    {
        $this->couleur = $c;
    }

    public function __destruct()
    {
        echo '<p>Ta caisse est moche</p>';// TODO: Implement __destruct() method.
    }
}