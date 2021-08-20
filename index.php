<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Auth\AuthFactory;
use App\Auth\LoginManager;

if (isset($_COOKIE['login']) || isset($_COOKIE['password']))
{
    header('Location: relocate.php');
    die();
}
else
{
    if (isset($_POST['email']) && isset($_POST['password']))
    {
        $login = LoginManager::auth($_POST['email'], $_POST['password']);
        if (!isset($login))
        {
            header('Location: index.php?invalid=1');
        }
        else
        {
            setcookie("login", $_POST['email'], time()+3600);
            setcookie("password", $_POST['password'], time()+3600);
            header('Location: relocate.php');
            die();
        }
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/app.css">
    <title>Калининградский стадион</title>
</head>
<body>
    <div class="container">
        <section class="wrapper">
            <div class="heading">
                <img src="img/main_logo.jpg" alt="логотип" class="logo">
            </div>
            <?php
            if (isset($_GET['invalid']))
                {
                    echo "Неверные данные, повторите попытку";
                }
            ?>
            <form name="login" class="form" method="post" action="index.php">
                <div class="input-control">
                    <label for="email" class="input-label" hidden>Email Address</label>
                    <input type="email" name="email" class="input-field" placeholder="abc@mail.com">
                </div>
                <div class="input-control">
                    <label for="password" class="input-label" hidden>Password</label>
                    <input type="password" name="password" class="input-field" placeholder="Ваш пароль">
                </div>
                <div class="input-control">
                    <div class="checkbox-field">
                    <input id="s2" type="checkbox" class="switch" checked>
                    <label for="s2">Запомнить меня</label>
                    </div>
                    <a href="#" class="text text-forgetpsw">Забыли пароль?</a>
                </div>
                <div class="input-control">
                    <input type="submit" name="submit" class="input-submit" value="Login">
                </div>
            </form>
        </section>
    </div>
</body>
</html>