<?php

require_once 'vendor/autoload.php';
use Icepace\UserCreator;

$db = new PDO('mysql:host=db; dbname=icepace', 'root', 'password');

if (isset($_POST['usernameInput']) && isset($_POST['passwordInput']) && isset($_POST['bioInput'])) {
    $username = $_POST['usernameInput'];
    $password = $_POST['passwordInput'];
    $bio = $_POST['bioInput'];

    $errorArray = UserCreator::insertUserIntoDb($username, $password, $bio, $db);
    if(empty($errorArray)){
        header('Location: index.php');
    } else {
        $_SESSION['errors'] = $errorArray;
//        $htmlString = '<div>
//            <h2>Sign up Errors ---</h2>
//            <p>' . $errorArray['username'] . '</p>
//            <p>' . $errorArray['password'] . '</p>
//            <p>' . $errorArray['bio'] . '</p>
//            <p>' . $errorArray['database'] . '</p>
//            <p>Please go back and try again</p>
//            </div>';
//        echo $htmlString;
    }
}

header('Location: registrationPage.php');
?>