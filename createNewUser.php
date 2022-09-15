<?php

require_once 'vendor/autoload.php';
use Icepace\UserCreator;

if (isset($_POST['usernameInput']) && isset($_POST['passwordInput']) && isset($_POST['bioInput'])) {
    $username = $_POST['usernameInput'];
    $password = $_POST['passwordInput'];
    $bio = $_POST['bioInput'];
    UserCreator::insertUserIntoDb($username, $password, $bio);
}

header('Location: registrationPage.php');