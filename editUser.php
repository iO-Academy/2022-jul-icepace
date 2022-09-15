<?php
use Icepace\UserHydrator;

require_once "vendor/autoload.php";
$username = 'timyop';
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
    <link rel="stylesheet" type="text/css" href="login.css" />
    <title>Icepace</title>
</head>
<body>
<nav>
    <a class="homePageTitle" href="index.php">
        <h1>Icepace</h1>
    </a>
    <div class="navBarButton">
        <div class="buttonContainer">
            <a class="navButton" href="login.php">My Profile</a>
        </div>
        <div class="buttonContainer">
            <a class="navButton" href="">Logout</a>
        </div>
    </div>
</nav>
<div class="editPageContainer">
    <div class="editPageFormContainer">
        <h2 class="loginTitle">Edit profile</h2>
        <form class="editForm" action="">
            <p class="radioTextInfo">Select an avatar from the options below.</p>
            <div class="radioTopContainer">
                <div class="radioContainer">
                    <img class="placeholderPhoto" src="./assets/imgs/avatars/placeholder.jpg" alt="placeholder" />
                    <input type="radio" class="avatarSelectRadio" value="placeholder.jpg" name="avatar" />
                </div>
                <div class="radioContainer">
                    <img class="placeholderPhoto" src="./assets/imgs/avatars/placeholder2.jpg" alt="placeholder" />
                    <input type="radio" class="avatarSelectRadio" value="placeholder2.jpg" name="avatar" />
                </div>
            </div>
            <div class="radioBottomContainer">
                <div class="radioContainer">
                    <img class="placeholderPhoto" src="./assets/imgs/avatars/placeholder3.jpg" alt="placeholder" />
                    <input type="radio" class="avatarSelectRadio" value="placeholder3.jpg" name="avatar" />
                </div>
                <div class="radioContainer">
                    <img class="placeholderPhoto" src="./assets/imgs/avatars/placeholder4.jpg" alt="placeholder" />
                    <input type="radio" class="avatarSelectRadio" value="placeholder4.jpg" name="avatar" />
                </div>
            </div>
            <div class="bioContainer">
                <label for="bio">Bio</label>
                <textarea id="bio"><? echo $user->getBio() ?></textarea>
            </div>
            <div class="inputContainer">
            <input class="submitForm" type="submit" value="Submit Changes!">
            </div>
        </form>
    </div>
</div>
</body>
</html>