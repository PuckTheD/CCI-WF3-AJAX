<?php

namespace monEspace1;

class Personne
{
    public $_nom;
    public $_prenom;
    public $_age;
// On récupère les modifications
    public function getNom()
    {
        return $this->_nom;
    }
    public function getPrenom()
    {
        return $this->_prenom;
    }
    public function getAge()
    {
        return $this->_age;
    }
    // On fait les modifications
    public function setNom($nom)
    {
        $this->_nom = $nom;
        return $this;
    }
    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
        return $this;
    }
    public function setAge($age)
    {
        $this->_age = $age;
        return $this;
    }
}