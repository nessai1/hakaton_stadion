<?php

namespace App\User;

class UserObject
{
    protected $email;
    protected $password;
    protected $userId;

    public function __construct($email, $password, $userId = null)
    {
        $this->email = $email;
        $this->password = $password;
        $this->userId = $userId;
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
        $this->userId = $userId;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }
}