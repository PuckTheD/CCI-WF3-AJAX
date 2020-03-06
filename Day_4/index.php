<?php
// Défini la plage horaire par défaut
date_default_timezone_set('Europe/Paris');
require_once './functions/classAutoLoader.php';
spl_autoload_register('classAutoLoader');

$voiture = new Voiture('Moutarde');
var_dump($voiture);