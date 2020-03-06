<?php
// Défini la plage horaire par défaut
date_default_timezone_set('Europe/Paris');
require_once './functions/classAutoLoader.php';
spl_autoload_register('classAutoLoader');

$twingo = new Voiture('Moutarde', 55, 943, 'SP95', 'Renault', 'Twingo');
$twingo->couleur = 'Saumon';
var_dump($twingo->Ec());