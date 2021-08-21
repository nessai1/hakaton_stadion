<?php

namespace App\Auth;

use App\User;
use Kreait\Firebase\Auth;
use Kreait\Firebase\Auth\SignIn\FailedToSignIn;
use Lcobucci\JWT\Exception;

class LoginManager
{
    public static function getAuthObject(User\UserObject $user)
    {
        $auth = AuthFactory::getFactory();
        try
        {

            $rs = $auth->createAuth()->signInWithEmailAndPassword($user->getEmail(), $user->getPassword());
            return $rs;
        }
        catch (FailedToSignIn $e)
        {
            return null;
        }
    }

    public static function authWithToken($token)
    {
        $auth = AuthFactory::getFactory();
        try
        {
            $rs = $auth->createAuth()->signInWithCustomTokenToken($token);
            return $rs;
        }
        catch (FailedToSignIn $e)
        {
            return null;
        }
    }

    public static function auth($email, $password)
    {
        $authObj = self::getAuthObject(new User\UserObject($email, $password));
        if (!isset($authObj))
        {
            return null;
        }
        return $authObj;
    }
}