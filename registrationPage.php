<?php
require_once "vendor/autoload.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css"/>
    <link rel="stylesheet" type="text/css" href="registrationPage.css"/>
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
<div class="formContainer">
    <div class="registrationPageContainer">
        <form class="registrationForm" method="post" action="createNewUser.php">
            <h1 class="createUserIntro">
                Create user
            </h1>
            <label for="usernameInput">Username</label>
            <input type="text" name="usernameInput" class="usernameInput" id="usernameInput" placeholder="Username"/>
            <label for="passwordInput">Password</label>
            <input type="password" name="passwordInput" class="passwordInput" id="passwordInput" placeholder="Password"/>
            <label for="bioInput">Bio</label>
            <textarea name="bioInput" class="bioInput" id="bioInput" rows="10" placeholder="Enter your bio here..."></textarea>
            <input class="submitForm" type="submit" value="Join Icepace!">
        </form>
    </div>
</div>
</body>
</html>
