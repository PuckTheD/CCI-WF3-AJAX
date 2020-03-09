<?php

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

$personne = new Personne();
// On injecte
$personne->setNom(" Hossein ");
$personne->setPrenom(" Alexandre ");
$personne->setAge(" 27 ");
// On affiche
print $personne->getPrenom();
print $personne->getNom();
print $personne->getAge();

//print_r ($personne); // Méthode Franck xD
?>

<p> Bonjour <?= $personne->getPrenom(); ?> <?=$personne->getNom();?>, tu as <?= $personne->getAge(); ?> ans.</p>