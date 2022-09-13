<?php
use Icepace\UsersHydrator;

require_once "vendor/autoload.php";

$id = 1;
$db = new PDO('mysql:host=db; dbname=icepace', 'root', 'password');
$user = UsersHydrator::getUserById($db, $id);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css"/>
    <link rel="stylesheet" type="text/css" href="user_profile.css"/>
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
        <img class="profileAvatarImg" src="./assets/imgs/avatars/placeholder.jpg"/>
        <h1 class="usernameProfileText">Username</h1>
        <div class="bioTextContainer">
            <p>Hello, I am the one and only Mike Oram, student at iO Academy.

                I have many interests including coding, philosophy, politics, Magic the Gathering, Dungeons and Dragons, spicy Reddit discussions, gardening, burritos, coding, philosophy, politics, Magic the Gathering, Dungeons and Dragons, spicy Reddit discussions, gardening, burritos, and many more. I care a lot about the environment and about making the world a better place for everyone.

                When it comes to coding, I'm more of a backend guy, but I have been known to dedicate many hours to CSS styling for the greater benefit of the team. I look forward to coding more code in the near future, hopefully less CSS!
            </p>
        </div>
    </div>
</div>
</div>
<? print_r($user); ?>
</body>
</html>
