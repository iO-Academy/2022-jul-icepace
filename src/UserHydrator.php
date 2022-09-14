<?php

namespace Icepace;

use PDO;

class UserHydrator
{
    public static function getAllUsers(PDO $db): array
    {
        $query = $db->prepare('SELECT `id`, `username`, `hashed_pass`, `bio`, `avatar` FROM `users`');
        $query->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, User::class);
        $query->execute();
        return $query->fetchAll();
    }

    public static function getUserByUsername(PDO $db, string $username): User
    {
        $query = $db->prepare('SELECT `id`, `username`, `hashed_pass`, `bio`, `avatar` FROM `users` WHERE username= ?');
        $query->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, User::class);
        $query->execute([$username]);
        return $query->fetch();
    }
}