<?php

class Voiture
{
    public string $couleur;
    public float $vitesse = 0;
    public int $masse;
    public int $nbrRoues = 4;
    public string $energie;
    public string $marque;
    public string $modele;
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
     * @return int
     */
    public function getNbrRoues(): int
    {
        return $this->nbrRoues;
    }

    /**
     * @param int $nbrRoues
     */
    public function setNbrRoues(int $nbrRoues): void
    {
        $this->nbrRoues = $nbrRoues;
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

    /**
     * @return string
     */
    public function getMarque(): string
    {
        return $this->marque;
    }

    /**
     * @param string $marque
     */
    public function setMarque(string $marque): void
    {
        $this->marque = $marque;
    }

    /**
     * @return string
     */
    public function getModele(): string
    {
        return $this->modele;
    }

    /**
     * @param string $modele
     */
    public function setModele(string $modele): void
    {
        $this->modele = $modele;
    }

    public function __construct(string $c, int $m, string $e, string $mq, string $mod)
    {
        $this->couleur = $c;
        $this->masse = $m;
        $this->energie = $e;
        $this->marque = $mq;
        $this->modele = $mod;
    }

    public function __destruct()
    {
        echo '<p>Ta caisse est moche</p>';// TODO: Implement __destruct() method.
    }
}