<?php

namespace Icepace;

use PDO;

class UserCreator
{
    function insertUserIntoDb(array $newUser)
    {
        $username = $newUser['username'];
        $password = $newUser['hashed_pass'];
        $bio = $newUser['bio'];

        $connectionString = 'mysql:host=db; dbname=icepace';
        $dbUsername = 'root';
        $dbPassword = 'password';
        $db = new PDO($connectionString, $dbUsername, $dbPassword);
        $queryString = 'INSERT INTO  `users` (`username`, `hashed_pass`, `bio`)
    VALUES (:username, :hashed_pass, :bio)';
        $query = $db->prepare($queryString);
        $query->execute (['username' => $username, 'hashed_pass' => $password, 'bio' => $bio]);
    }
}