<?php

namespace Icepace;


class UserCreator
{
    const NAME_REQUIRED = 'Please enter your name';
    const NAME_TAKEN = 'Please enter a unique name';
    const PASSWORD_REQUIRED = 'Please enter a your password';
    const PASSWORD_INVALID = 'Please enter a valid password';
    const BIO_REQUIRED = 'Please enter a your bio';
    const BIO_INVALID = 'Please enter a valid bio';

    public static function validateInput(): bool
    {
        $errorArray = [];
        $username = trim(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING));
        $errorArray['username'] = self::validateUsername($username);
        $errorArray['password'] = self::validatePassword($password);
        $errorArray['bio'] = self::validateBio($bio);
        return empty($errorArray);
    }

    private static function validateUsername(string $username): string
    {
        if ($username === '') {
            $errorString = UserCreator::NAME_REQUIRED;
        } elseif (!self::isUsernameUnique($username)) {
            $errorString = UserCreator::NAME_TAKEN;
        }
        return $errorString;
    }

    private static function validatePassword(string $password): string
    {
        if ($password === '') {
            $errorString = UserCreator::PASSWORD_REQUIRED;
        } elseif (strlen($password) < 8) {
            $errorString = UserCreator::PASSWORD_INVALID;
        }
        return $errorString;
    }

    private static function validateBio(string $bio): string
    {
        if ($bio === '') {
            $errorString = UserCreator::BIO_REQUIRED;
        } elseif (strlen($bio) > 2000) {
            $errorString = UserCreator::BIO_INVALID;
        }
        return $errorString;
    }

    private static function isUsernameUnique(string $username): bool
    {
        $db = new PDO('mysql:host=db; dbname=icepace', 'root', 'password');
        $usersArray = UserHydrator::getAllUsers($db);
        foreach ($usersArray as $user) {
            $existingUsername = $user->getUsername();
            if ($existingUsername === $username) {
                return false;
            }
        }
        return true;
    }

    public static function insertUserIntoDb()
    {

    }
}