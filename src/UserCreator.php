<?php

namespace Icepace;

use PDO;

class UserCreator
{
    const USERNAME_REQUIRED = 'Please enter your username';
    const USERNAME_TAKEN = 'Someone already has this username! Please enter a unique one';
    const PASSWORD_REQUIRED = 'Please enter your password';
    const PASSWORD_INVALID = 'Your password is shorter than 8 characters';
    const BIO_REQUIRED = 'Please enter your bio';
    const BIO_INVALID = 'Your bio is longer than 2000 characters';

    private static function sanitiseUsername(string $username): string
    {
        return trim(filter_var($username, FILTER_SANITIZE_STRING));
    }

    private static function sanitiseBio(string $bio): string
    {
        return filter_var($bio, FILTER_SANITIZE_STRING);
    }

    private static function validateUsername(string $username): ?string
    {
        if ($username === '') {
            return self::USERNAME_REQUIRED;
        }
        return null;
    }

    private static function validatePassword(string $password): ?string
    {
        if ($password === '') {
            return self::PASSWORD_REQUIRED;
        } elseif (strlen($password) < 8) {
            return self::PASSWORD_INVALID;
        }
        return null;
    }

    private static function validateBio(string $bio): ?string
    {
        if ($bio === '') {
            return self::BIO_REQUIRED;
        } elseif (strlen($bio) > 2000) {
            return self::BIO_INVALID;
        }
        return null;
    }

    public static function insertUserIntoDb(string $username, string $password, string $bio, PDO $db): array
    {
        $placeholderAvatar = 'placeholder.jpg';

        $username = self::sanitiseUsername($username);
        $bio = self::sanitiseBio($bio);

        $result['errors']['username'] = self::validateUsername($username);
        $result['errors']['password'] = self::validatePassword($password);
        $result['errors']['bio'] = self::validateBio($bio);

        $hashed_pass = password_hash($password, PASSWORD_BCRYPT);

        if (!$result['errors']['username'] && !$result['errors']['password'] && !$result['errors']['bio']) {
            $queryString = 'INSERT INTO  `users` (`username`, `hashed_pass`, `bio`, `avatar`) 
        VALUES (:username, :hashed_pass, :bio, :avatar)';
            $query = $db->prepare($queryString);
            $result['success'] = $query->execute(['username' => $username, 'hashed_pass' => $hashed_pass, 'bio' => $bio, 'avatar' => $placeholderAvatar]);
            if(!$result['success']) {
                $result['errors']['username'] = self::USERNAME_TAKEN;
            }
        } else {
            $result['success'] = false;
        }
        return $result;
    }
}