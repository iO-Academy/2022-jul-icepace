<?php

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
    <a class="navButton" href="login.php">Login</a>
    <a class="navButton" href="">Logout</a>
</nav>
<div class="loginPageContainer">
    <div class="loginPageFormContainer">
        <h2 class="loginTitle">Login</h2>
        <form class="loginForm" action="">
            <div class="inputContainer">
                <label class="inputLabel" for="usernameInput">Username</label>
                <input type-="text" class="usernameInput" id="usernameInput" />
            </div>
            <div class="inputContainer">
                <label class="inputLabel" for="passwordInput">Password</label>
                <input type-="password" class="passwordInput" id="passwordInput" />
            </div>
            <div class="inputContainer">
            <input class="submitForm" type="submit" value="Login to Icepace!">
            </div>
        </form>
    </div>
</div>
</body>
</html>

