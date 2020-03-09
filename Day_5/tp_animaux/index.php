<?php
require_once './functions/classAutoLoader.php';
spl_autoload_register('classAutoLoader');

$chat = new Chat();
$chien = new Chien();
$lapin = new Lapin();

?>

<p><?= $chat->type() ?> <br> <?= $chat->crier() ?></p>
<p><?= $chien->type() ?></p>
<p><?= $lapin->type() ?></p>

