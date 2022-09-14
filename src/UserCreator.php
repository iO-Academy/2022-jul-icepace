<?php

namespace Icepace;

class UserCreator
{
    public static function validateInput()
    {

    }

    private static function validateUsername()
    {

    }

    private static function validatePassword(string $password): bool
    {
        return strlen($password) > 8;
    }

    private static function validateBio()
    {

    }

    public static function insertUserIntoDb()
    {

    }
}