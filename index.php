<?php

use Icepace\UsersHydrator;

//require_once "vendor/autoload.php";
//$db = new PDO('mysql:host=db; dbname=icepace', 'root', 'password');
//$users = UsersHydrator::getAllUsers($db);

//    $htmlOutput = '<div class="userCard">';
//    $htmlOutput .= '<img class="avatarImg" src="' . $this->avatar . '" alt="Profile Picture">';
//    $htmlOutput .= "<p class='cardUsernameText'>$this->username</p>";
//    $htmlOutput .= '</div>'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css" />
    <title>Icepace</title>
</head>
<body>
    <nav>
        <h1>Icepace</h1>
    </nav>
    <div class="allUserCardContainer">
        <div>
            <h2 class="user-header">All users</h2>
        </div>
        <div class="userCard">
            <img class="avatarImg" src="someguy.webp" alt="Profile Picture">
            <p class='cardUsernameText'>TestUsername</p>
        </div>
        <div class="userCard">
            <img class="avatarImg" src="peng.png" alt="Profile Picture">
            <p class='cardUsernameText'>TestUsername</p>
        </div>
    </div>
</body>
</html>