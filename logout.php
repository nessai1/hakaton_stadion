<?php

setcookie('login', '', time()+0);
setcookie('password', '', time()+0);
header('Location: index.php');
die();