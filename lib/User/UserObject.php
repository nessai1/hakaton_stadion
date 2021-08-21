<?php

namespace App\User;

use App\Auth\LoginManager;
use App\Database\DbManager;

class UserObject
{
    protected $email;
    protected $password;
    protected $id;
    protected $name;
    protected $role;

    protected $loginObject = null;

    protected function getLoginObject()
    {
        if (isset($this->loginObject))
        {
            return $this->loginObject;
        }
        else
        {
            $this->loginObject = LoginManager::auth($this->getEmail(), $this->getPassword());
            return $this->loginObject;
        }
    }

    public function __construct(string $email, string $password, $userId = null)
    {
        $this->email = $email;
        $this->password = $password;
        $this->id = $userId;
    }

    public function getEmail(): string
    {
        return $this->email;
    }


    public function getPassword(): string
    {
        return $this->password;
    }

    public function setUserId(string $userId)
    {
        $this->id = $userId;
    }

    public function getUserId(): string
    {
        return $this->id;
    }

    public function setUserRole(int $userRole)
    {
        $this->role = $userRole;
    }

    public function getUserRole(): int
    {
        return $this->role;
    }

    public function getUserRoleString() : string
    {
        return Role::convertFromIntToString($this->getUserRole());
    }

    public function setUserName(string $name)
    {
        $this->name = $name;
    }

    public function getUserName(): string
    {
        return $this->name;
    }

    public function refreshUserData()
    {

        if (!isset($this->id))
        {
            $this->setUserId($this->getLoginObject()->data()['localId']);
        }

        $requestResult = DbManager::getReference("users/{$this->id}")->getValue();
        if (isset($requestResult))
        {
            $this->setUserRole(Role::convertFromStringToInt($requestResult['role']));
            $this->setUserName($requestResult['username']);
        }
        else
        {
            $this->setUserRole(Role::convertFromStringToInt(null));
            $this->setUserName('unnamed');
        }
    }
}