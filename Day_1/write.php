<?php

$value = isset($_POST['value']) ? $_POST['value'] : "@";

$directory = './AJAX/fichiers/';
$file = "key_records.txt";
$path = dirname(__DIR__) . $directory . $file;
$handle = fopen($path, "a");
fwrite($handle, $value);
fclose($handle);