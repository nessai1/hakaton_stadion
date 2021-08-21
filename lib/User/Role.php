<?php

namespace App\User;


use App\Auth\AuthFactory;

class Role
{
    const ADMIN = 1;
    const SECURITY = 2;
    const DIRECTOR = 3;
    const CONTROL_GUARD = 5;

    public static function getUserRole(UserObject $user): string
    {
    }
}