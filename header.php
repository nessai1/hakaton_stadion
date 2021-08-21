<?php

require_once __DIR__.'/vendor/autoload.php';

if (!isset($_COOKIE['login']) || !isset($_COOKIE['password']))
{
    header('Location: relocate.php');
}

$user = new \App\User\UserObject($_COOKIE['login'], $_COOKIE['password']);
$user->refreshUserData();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
    <link rel="stylesheet" href="css/mainpage.css">
</head>
<body>
<div class="navbar">
<span class="text"><?=$user->getUserName()?><br>Должность: <?=$user->getUserRoleString()?></span>
<a class="link" href="logout.php">Выйти</a>
</div>
</body>
</html>