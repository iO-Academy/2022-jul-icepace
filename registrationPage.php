<?php
require_once "vendor/autoload.php";
session_start();

$username_error = '';
$password_error = '';
$bio_error = '';

if(isset($_SESSION['errors'])){
    // double question mark is a ternary that ALSO does an isset() function
    $username_error ??= $_SESSION['errors']['username'];
    $password_error ??= $_SESSION['errors']['password'];
    $bio_error ??= $_SESSION['errors']['bio'];
}

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
</nav>
<div class="formContainer">
    <div class="registrationPageContainer">
        <form class="registrationForm" method="post" action="createNewUser.php">
            <h1 class="createUserIntro">
                Create user
            </h1>
            <label for="usernameInput">Username</label>
            <?php echo $username_error ?>
            <input type="text" name="usernameInput" class="usernameInput" id="usernameInput" placeholder="Username"/>
            <label for="passwordInput">Password</label>
            <?php echo $password_error ?>
            <input type="password" name="passwordInput" class="passwordInput" id="passwordInput" placeholder="Password"/>
            <label for="bioInput">Bio</label>
            <?php echo $bio_error ?>
            <textarea name="bioInput" class="bioInput" id="bioInput" rows="10" placeholder="Enter your bio here..."></textarea>
            <input class="submitForm" type="submit" value="Join Icepace!">
        </form>
    </div>
</div>
</body>
</html>
