<?php

namespace monEspace2;

class Personne
{
    public $_nom;
    public $_prenom;
    public $_age;
    public $_taille;
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
    public function getTaille()
    {
        return $this->_taille;
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
    public function setTaille($taille)
    {
        $this->_taille = $taille;
        return $this;
    }
}
