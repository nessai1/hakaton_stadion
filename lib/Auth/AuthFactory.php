<?php

namespace App\Auth;

use Kreait\Firebase\Factory;

class AuthFactory
{
    protected static $factory;

    public static function getFactory()
    {
        if (!isset(self::$factory))
        {
            self::$factory = self::createFactory();
        }

        return self::$factory;
    }

    protected static function createFactory()
    {
        self::$factory = (new Factory)
            ->withServiceAccount('stadion-hack-firebase-adminsdk-p98co-dd634d2e7f.json')
            ->withDatabaseUri('https://stadion-hack-default-rtdb.firebaseio.com/');
        return self::$factory;
    }
}
