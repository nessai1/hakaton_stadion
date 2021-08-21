<?php

namespace App\Database;

use App\Auth\AuthFactory;

class DbManager
{
    protected static $database = null;

    public static function getDatabase(): \Kreait\Firebase\Contract\Database
    {
        return self::$database ?? self::createDatabase();
    }

    protected static function createDatabase(): \Kreait\Firebase\Contract\Database
    {
        self::$database = AuthFactory::getFactory()->createDatabase();
        return self::$database;
    }

    public static function getReference(string $reference)
    {
        $db = self::getDatabase()->getReference($reference);
    }

}