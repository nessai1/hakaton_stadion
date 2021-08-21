<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Auth\AuthFactory;
use App\Auth\LoginManager;

function goDie()
{
    setcookie('login', '', time()+0);
    setcookie('password', '', time()+0);
    header('Location: index.php');
    die();
}

if (isset($_COOKIE['login']) && isset($_COOKIE['password']))
{
    $login = LoginManager::auth($_COOKIE['login'], $_COOKIE['password']);
    if (!isset($login))
    {
        goDie();
    }
    header('Location: header.php');
}
else
{
    goDie();
}