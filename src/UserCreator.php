<?php

namespace Icepace;


class UserCreator
{
    const NAME_REQUIRED = 'Please enter your name';
    const NAME_TAKEN = 'Someone already has this username! Please enter a unique one';
    const PASSWORD_REQUIRED = 'Please enter a your password';
    const PASSWORD_INVALID = 'Your password is shorter than 8 characters';
    const BIO_REQUIRED = 'Please enter a your bio';
    const BIO_INVALID = 'Your bio is longer than 2000 characters';

    public static function validateInput($username, $password, $bio): array
    {
        $errorArray = [];
        $errorArray['username'] = self::validateUsername($username);
        $errorArray['password'] = self::validatePassword($password);
        $errorArray['bio'] = self::validateBio($bio);
        return $errorArray;
    }

    public static function sanitiseUsername(string $username): string
    {
        return trim(filter_input(INPUT_POST, $username, FILTER_SANITIZE_STRING));
    }

    public static function sanitiseBio(string $bio): string
    {
        return filter_input(INPUT_POST, $bio, FILTER_SANITIZE_STRING);
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
        try{
            $usersArray = UserHydrator::getAllUsers($db);
        } catch (Exception $e) {
            echo '<p>Your connection to the database failed =-(</p>';
        }
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