<?php

namespace Icepace;

use PDO;

class UserCreator
{
    public static function insertUserIntoDb($username, $password, $bio)
    {
        $connectionString = 'mysql:host=db; dbname=icepace';
        $dbUsername = 'root';
        $dbPassword = 'password';
        $db = new PDO($connectionString,$dbUsername, $dbPassword);

        $queryString = 'INSERT INTO  `users` (`username`, `hashed_pass`, `bio`) 
        VALUES (:username, :hashed_pass, :bio)';
        $query = $db->prepare($queryString);
        $query->execute(['username' => $username, 'hashed_pass' => $password, 'bio' => $bio]);
    }
}