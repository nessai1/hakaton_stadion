<?php

require_once __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;


$factory = (new Factory)
    ->withServiceAccount('stadion-hack-firebase-adminsdk-p98co-dd634d2e7f.json')
    ->withDatabaseUri('https://stadion-hack-default-rtdb.firebaseio.com/');

$db = $factory->createDatabase();

$ref = $db->getReference('organisations');
var_dump($ref->getValue());
