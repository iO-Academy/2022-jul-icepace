<?php

namespace Icepace;

use PDO;

class UserHydrator
{
    public static function getAllUsers(PDO $db): array
    {
        $query = $db->prepare('SELECT `id`, `username`, `hashed_pass`, `bio`, `avatar` FROM `users`');
        $query->setFetchMode(PDO::FETCH_CLASS, User::class);
        $query->execute();
        return $query->fetchAll();
    }
}