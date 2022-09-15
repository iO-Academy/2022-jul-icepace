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
        //WE ARE HERE -> RESULTS ARRAY IS PASSED CORRECTLY HOWEVER NOT BEING ASSIGNED TO _SESSION
        $_SESSION['errors'] = $result['errors'];
        $test = var_dump($result);
//        header("Location: $test");
    }
} else {
    header('Location: google.com');
}

?>