<?php
use Icepace\UserHydrator;

require_once "vendor/autoload.php";

$username = $_GET['username'];
$db = new PDO('mysql:host=db; dbname=icepace', 'root', 'password');
try {
    $user = UserHydrator::getUserByUsername($db, $username);
} catch (TypeError $e) {
    header('Location:index.php');
}



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
    <a class="homePageTitle" href="index.php">
        <h1>Icepace</h1>
    </a>
    <div class="navBarButton">
        <div class="buttonContainer">
            <a class="navButton" href="login.php">Login</a>
        </div>
        <div class="buttonContainer">
            <a class="navButton" href="">Logout</a>
        </div>
        <div class="buttonContainer">
            <a class="navButton" href="registrationPage.php">Sign up</a>
        </div>
    </div>
</nav>
<div class="userProfileContainer">
    <div class="topButtonContainer">
        <div class="backToAllUsers">
            <a href="index.php">< back to all users</a>
        </div>
        <div class="editProfileButton">
            <a class="editProfileButtonLink" href="index.php">Edit Profile</a>
        </div>
    </div>
    <div class="profileCard">
        <img class="profileAvatarImg" src="<? echo $user->getFullAvatarPath(); ?>" alt="Profile picture"/>
        <h1 class="usernameProfileText"><? echo $user->getUsername(); ?></h1>
        <div class="bioTextContainer">
            <p><? echo $user->getSanitizedBio(); ?></p>
        </div>
    </div>
</div>
</body>
</html>
