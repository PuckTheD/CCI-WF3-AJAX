<?php

$nom = isset($_POST['nom']) ? $_POST['nom'] : "Pas de nom";
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : "Pas de prénom";
$mail = isset($_POST['mail']) ? $_POST['mail'] : "Pas d'email";

$directory = '/AJAX/fichiers/';
$file = 'resultats.log';
$path = dirname(__DIR__) . $directory . $file;
$handle = fopen($path, "a");
fwrite($handle, $nom . " - " . $prenom . " - " . $mail . PHP_EOL);
fclose($handle);