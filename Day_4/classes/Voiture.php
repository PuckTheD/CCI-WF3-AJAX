<?php

class Voiture extends Vehicule //Héritage
{
    public string $couleur;
    public int $nbrRoues = 4;
    public string $marque;
    public string $modele;

    public function __construct(string $c, int $m, string $e, string $mq, string $mod)
    {
        $this->couleur = $c;
        $this->masse = $m;
        $this->energie = $e;
        $this->marque = $mq;
        $this->modele = $mod;
    }

    /**
     * @return string
     */
    public function getCouleur(): string
    {
        return $this->couleur;
    }

    /**
     * @param string $couleur
     */
    public function setCouleur(string $couleur): void
    {
        $this->couleur = $couleur;
    }

    /**
     * @return float
     */
    public function getVitesse(): float
    {
        return $this->vitesse;
    }

    /**
     * @param float $vitesse
     */
    public function setVitesse(float $vitesse): void
    {
        $this->vitesse = $vitesse;
    }

    /**
     * @return int
     */
    public function getMasse(): int
    {
        return $this->masse;
    }

    /**
     * @param int $masse
     */
    public function setMasse(int $masse): void
    {
        $this->masse = $masse;
    }

    /**
     * @return string
     */
    public function getEnergie(): string
    {
        return $this->energie;
    }

    /**
     * @param string $energie
     */
    public function setEnergie(string $energie): void
    {
        $this->energie = $energie;
    }

    public function __destruct()
    {
        echo '<p>Ta caisse est moche</p>';// TODO: Implement __destruct() method.
    }
}