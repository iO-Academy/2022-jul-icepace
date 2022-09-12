<?php

namespace Icepace;

class UsersHydrator
{
    public static function getAllUsers(PDO $db)
    {
        $query = $db->prepare('SELECT * FROM `users`');
        $query->setFetchMode(PDO::FETCH_CLASS, User::class);
        $query->execute();
        return $query->fetchAll();
    }
}