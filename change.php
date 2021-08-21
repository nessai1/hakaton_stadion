<?php

require_once __DIR__.'/vendor/autoload.php';

$id = $_GET['nodeId'];
$index = $_GET['index'];

switch ($_GET['USER'])
{
    case 'DIR':
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

//echo "ID: ". $id . "<br>";
//echo "hand: ". $hand . "<br>" . "INDEX: " . $index;

if ($trust)
{
    $aaa = \App\Database\DbManager::getReference("request_person/{$id}/{$index}/{$hand}");
    $aaa->set(true);
}
else
{
    $aaa = \App\Database\DbManager::getReference("request_person/{$id}/{$index}/dangerous");
    $aaa->set(true);
}

header('Location: header.php');
die();