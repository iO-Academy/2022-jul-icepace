<?php
session_start();
require_once 'vendor/autoload.php';
use Icepace\UserCreator;

$db = new PDO('mysql:host=db; dbname=icepace', 'root', 'password');

if (isset($_POST['usernameInput']) && isset($_POST['passwordInput']) && isset($_POST['bioInput'])) {
    $username = $_POST['usernameInput'];
    $password = $_POST['passwordInput'];
    $bio = $_POST['bioInput'];

    $result = UserCreator::insertUserIntoDb($username, $password, $bio, $db);

    if($result['success']){
        header('Location: index.php');
        unset($_SESSION['errors']);
    } else {
        $_SESSION['errors'] = $result['errors'];
        header('Location: registrationPage.php');
    }
} else {
    header('Location: registrationPage.php');
}

?>