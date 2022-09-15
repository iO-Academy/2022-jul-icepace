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

    public static function insertUserIntoDb($username, $password, $bio)
    {
        $connectionString = 'mysql:host=db; dbname=icepace';
        $dbUsername = 'root';
        $dbPassword = 'password';
        $db = new PDO($connectionString, $dbUsername, $dbPassword);
        $errorArray = [];

        $username = self::sanitiseUsername($username);
        $bio = self::sanitiseBio($bio);
        $errorArray =self::validateInput($username, $password, $bio);
        $hashed_pass = password_hash($password, PASSWORD_BCRYPT);

        $queryString = 'INSERT INTO  `users` (`username`, `hashed_pass`, `bio`) 
        VALUES (:username, :hashed_pass, :bio)';
        $query = $db->prepare($queryString);
        $query->execute(['username' => $username, 'hashed_pass' => $hashed_pass, 'bio' => $bio]);
    }
}