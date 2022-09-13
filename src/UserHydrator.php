<?php

namespace Icepace;

use PDO;
use Icepace\User;

class UserHydrator
{
    public static function getAllUsers(PDO $db): array
    {
        $query = $db->prepare('SELECT `id`, `username`, `hashed_pass`, `bio`, `avatar` FROM `users`');
//        $query->setFetchMode();
        $query->execute();
        return $query->fetchAll(PDO::FETCH_FUNC, function($id, $username, $hashed_pass, $bio, $avatar) {
            return new User($id, $username, $hashed_pass, $bio, $avatar);
        });
    }
}

