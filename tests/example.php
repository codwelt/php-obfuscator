<?php

require __DIR__ . '/../vendor/autoload.php';

require '../src/ObfuscatorInterface.php';
require '../src/Config.php';
require '../src/Obfuscator.php';

use pmaslak\PhpObfuscator\Obfuscator;

$obfuscator = new Obfuscator([
    'debug' => false,
    'allowed_mime_types' => ['text/x-php'],
    'obfuscation_options' => ['no-obfuscate-variable-name', 'no-obfuscate-method-name', 'no-obfuscate-class-name', 'no-obfuscate-property-name']
]);


$obfuscator->obfuscateFile('./to_obfuscate/file_to_obfuscate.php', './obfuscated_file.php');
//$obfuscator->obfuscateDirectory('./to_obfuscate/', './obfuscated/');

