<?php
use Icepace\UserHydrator;

require_once "vendor/autoload.php";

$username = $_GET['username'];
$db = new PDO('mysql:host=db; dbname=icepace', 'root', 'password');
$user = UserHydrator::getUserByUsername($db, $username);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css"/>
    <link rel="stylesheet" type="text/css" href="userProfile.css"/>
    <title>Icepace</title>
</head>
<body>
<nav>
    <h1>Icepace</h1>
</nav>
<div class="userProfileContainer">
    <div class="backToAllUsers">
        <a href="index.php">< back to all users</a>
    </div>
    <div class="profileCard">
        <img class="profileAvatarImg" src="<? echo $user->getAvatar(); ?>" alt="Profile picture"/>
        <h1 class="usernameProfileText"><? echo $user->getUsername(); ?></h1>
        <div class="bioTextContainer">
            <p><? echo nl2br($user->getSanitizedBio(), $use_xhtml = true); ?></p>
        </div>
    </div>
</div>
</body>
</html>
