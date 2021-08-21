<?php

namespace App\User;


use App\Auth\AuthFactory;

class Role
{
    const ADMIN = 1;
    const SECURITY = 2;
    const DIRECTOR = 3;
    const HEAD = 4;
    const CONTROL_GUARD = 5;

    public static function convertFromStringToInt($role)
    {
        switch ($role)
        {
            case 'admin':
                return Role::ADMIN;
            case 'control_guard':
                return Role::CONTROL_GUARD;
            case 'director':
                return Role::DIRECTOR;
            case 'security':
                return Role::SECURITY;
            case 'HEAD':
                return Role::HEAD;
            default:
                return 0;
        }
    }

    public static function convertFromIntToString($role)
    {
        switch ($role)
        {
            case Role::ADMIN:
                return 'Администратор';
            case Role::CONTROL_GUARD:
                return 'Работник КПП';
            case Role::DIRECTOR:
                return 'Директор';
            case Role::SECURITY:
                return 'Служба безопасности';
            case Role::HEAD:
                return 'Начальник отдела';
            default:
                return 'Неизвестно';
        }
    }
}