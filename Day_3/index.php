<?php
// On require une fois chaque.
require_once 'namespace1.php';
require_once 'namespace2.php';
// On défini 'as' pour ne pas tout réécrire à chaque appel.
use monEspace1 as A;
use monEspace2 as B;
// On défini personneA en fonction de monEspace1
$personneA = new A\Personne();

$personneA->setNom('Hossein');
$personneA->setPrenom('Alexandre');
$personneA->setAge(27);

// On défini personneB en fonction de monEspace2
$personneB = new B\Personne();
$personneB->setNom('Tolkien');
$personneB->setPrenom('J.R.R');
$personneB->setAge(152);
$personneB->setTaille("1 m 74");

class Article
{
    public $_titre;
    public $_auteur;

    public function __construct($titre, $auteur)
    {
        $this->setTitre($titre);
        $this->setAuteur($auteur);
    }
    public function getTitre()
    {
        return $this->_titre;
    }
    public function setTitre($new_titre)
    {
        $this->_titre = $new_titre;
    }
    public function getAuteur()
    {
        return $this->_auteur;
    }
    public function setAuteur($new_auteur)
    {
        $this->_auteur = $new_auteur;
    }
}

$article = new Article('Le poo c\'est caca ', ' Moi');
print_r($article->getTitre());
print_r($article->getAuteur());
?>

<p> Bonjour <?= $personneA->getPrenom(); ?> <?=$personneA->getNom();?>, tu as <?= $personneA->getAge(); ?> ans.</p>
<br>
<p> Bonjour <?= $personneB->getPrenom(); ?> <?=$personneB->getNom();?>, tu as <?= $personneB->getAge(); ?> ans et tu mesures <?= $personneB->getTaille(); ?>.</p>