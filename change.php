<?php

require_once __DIR__.'/vendor/autoload.php';

$id = $_GET['nodeId'];
$index = $_GET['index'];

switch ($_GET['USER'])
{
    case 'dir':
        $hand = 'confirmed_director';
        break;
    default:
        $hand = 'confirmed_head';
}

switch ($_GET['EDIT'])
{
    case 'Y':
        $trust = true;
        break;
    default:
        $trust = false;
}


if ($trust)
{
    $aaa = \App\Database\DbManager::getReference("request_person/{$id}/{$index}/{$hand}");
    $aaa->set(true);
    $aaa = \App\Database\DbManager::getReference("request_person/{$id}/{$index}/{$hand}");
    var_dump($aaa->getValue());
    die();
}
else
{
    $aaa = \App\Database\DbManager::getReference("request_person/{$id}/{$index}/danger");
    $aaa->set(true);
}

header('Location: header.php');
die();