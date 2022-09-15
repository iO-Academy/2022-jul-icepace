<?php

namespace Icepace;

use PDO;

class UserCreator
{
    const NAME_REQUIRED = 'Please enter your name';
    const NAME_TAKEN = 'Someone already has this username! Please enter a unique one';
    const PASSWORD_REQUIRED = 'Please enter a your password';
    const PASSWORD_INVALID = 'Your password is shorter than 8 characters';
    const BIO_REQUIRED = 'Please enter a your bio';
    const BIO_INVALID = 'Your bio is longer than 2000 characters';


    private static function validateInput($username, $password, $bio): array
    {
        $errorArray = [];
        $errorArray['username'] = self::validateUsername($username);
        $errorArray['password'] = self::validatePassword($password);
        $errorArray['bio'] = self::validateBio($bio);
        return $errorArray;
    }

    private static function sanitiseUsername(string $username): string
    {
        return trim(filter_input(INPUT_POST, $username, FILTER_SANITIZE_STRING));
    }

    private static function sanitiseBio(string $bio): string
    {
        return filter_input(INPUT_POST, $bio, FILTER_SANITIZE_STRING);
    }

    private static function validateUsername(string $username): string
    {
        $username === '' ? $errorString = UserCreator::NAME_REQUIRED : $errorString = '';
        return $errorString;
    }

    private static function validatePassword(string $password): string
    {
        if ($password === '') {
            $errorString = UserCreator::PASSWORD_REQUIRED;
        } elseif (strlen($password) < 8) {
            $errorString = UserCreator::PASSWORD_INVALID;
        } else {
            $errorString = '';
        }
        return $errorString;
    }

    private static function validateBio(string $bio): string
    {
        if ($bio === '') {
            $errorString = UserCreator::BIO_REQUIRED;
        } elseif (strlen($bio) > 2000) {
            $errorString = UserCreator::BIO_INVALID;
        } else {
            $errorString = '';
        }
        return $errorString;
    }

    public static function insertUserIntoDb(string $username, string $password, string $bio, PDO $db): array
    {
        $placeholderAvatar = 'placeholder.jpeg';

        $username = self::sanitiseUsername($username);
        $bio = self::sanitiseBio($bio);
        $result['errors'] = self::validateInput($username, $password, $bio);
        $hashed_pass = password_hash($password, PASSWORD_BCRYPT);

        $queryString = 'INSERT INTO  `users` (`username`, `hashed_pass`, `bio`, `avatar`) 
        VALUES (:username, :hashed_pass, :bio, :avatar)';
        $query = $db->prepare($queryString);
        $result['success'] = $query->execute(['username' => $username, 'hashed_pass' => $hashed_pass, 'bio' => $bio, 'avatar' => $placeholderAvatar]);
        if(!$result['success']) {
            $result['errors']['username'] = self::NAME_TAKEN;
        }
        return $result;
    }
}