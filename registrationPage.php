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
    <h1>Icepace</h1>
</nav>
<div class="registrationPageContainer">
    <div class="formContainer">
        <form class="registrationForm">
            <h1 class="createUserIntro">
                Create user
            </h1>
            <label for="usernameInput">Username</label>
            <input type="text" name="usernameInput" class="usernameInput" id="usernameInput" placeholder="Username"/>
            <label for="passwordInput">Password</label>
            <input type="password" name="passwordInput" class="passwordInput" id="passwordInput" placeholder="Password"/>
            <label for="bioInput">Bio</label>
            <textarea name="bioInput" class="bioInput" id="bioInput" rows="10">Enter bio here</textarea>
            <input class="submitForm" type="submit" value="Join Icepace!">
        </form>
    </div>

</div>


</body>
</html>
