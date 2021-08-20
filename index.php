<?php

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
            <form name="login" class="form">
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
                    <input type="button" name="submit" class="input-submit" value="Login" disabled>
                </div>
            </form>
        </section>
    </div>
</body>
</html>