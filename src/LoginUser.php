<?php

namespace Icepace;

use PDO;

require_once "vendor/autoload.php";

class LoginUser
{
    public function checkingUserExists(PDO $db)
    {
        try {
            if (isset($_POST['login'])) {
                if ($_POST['usernameInput'] != " " || $_POST['passwordInput'] != " ") {
                    $query = $db->prepare('SELECT * FROM `users` WHERE `username` =?');
                    $query->execute();
                    $result = $query->fetch();
                    return $result;
                }
            }
        } catch (PDOException $e) {
                header('Location:login.php');
            }
    }
    public function logInUser($result)
    {
        $userPassword = $_POST['passwordInput'];
        $hashedPassword = password_hash($userPassword, PASSWORD_BCRYPT);
        if ($hashedPassword == $result['hashed_pass']) {
            session_start();
            $_SESSION['currentUser'] = $result;
            header('Location:userProfile.php');
        }

    }



}