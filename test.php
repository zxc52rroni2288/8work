<?php

require 'vendor/autoload.php';

use App\FileHandler;

$fileHandler = new FileHandler();
$result = $fileHandler->readFile('text.txt');
echo $result;
