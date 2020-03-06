<?php
// Défini la plage horaire par défaut
date_default_timezone_set('Europe/Paris');
require_once './functions/classAutoLoader.php';
spl_autoload_register('classAutoLoader');

$twingo = new Voiture('Moutarde', 943, 'SP95', 'Renault', 'Twingo');
$twingo->couleur = 'Saumon';
$twingo->vitesse = 40;
//var_dump($twingo);
?>

<p>Energie cinétique de <b><?= $twingo->marque . " " . $twingo->modele ?></b> est de :
    <i><u><?= $twingo->Ec() ?></u></i> J.</p>
