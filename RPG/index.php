<?php
// Défini la plage horaire par défaut
date_default_timezone_set('Europe/Paris');
require_once './functions/classAutoLoader.php';
spl_autoload_register('classAutoLoader');

$mage = new Magicien('Albus');
?>

<p><b>NOM : </b><?= $mage->nom ?></p>
<span><i>PM : </i><?= $mage->pointsMagie ?></span><br>
<span><i>PV : </i><?= $mage->pointsVie ?></span><br>
<span><i>END : </i><?= $mage->endurance ?></span><br>
<span><i>INT : </i><?= $mage->intelligence ?></span><br>
<span><i>FOR : </i><?= $mage->force ?></span><br>
<span><i>DEF : </i><?= $mage->defence ?></span><br>
<span><i>EXP : </i><?= $mage->experience ?></span><br>
