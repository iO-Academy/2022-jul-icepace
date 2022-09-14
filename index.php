<?php
require_once "vendor/autoload.php";

use Icepace\UserHydrator;

$db = new PDO('mysql:host=db; dbname=icepace', 'root', 'password');
$users = UserHydrator::getAllUsers($db);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css" />
    <title>Icepace</title>
</head>
<body>
    <nav>
        <a class="homePageTitle" href="index.php">
            <h1>Icepace</h1>
        </a>
        <a class="signUp" href="registrationPage.php">sign up</a>
    </nav>
    <div class="allUserCardsContainer">
        <h2 class="user-header">All users</h2>
    <?php
      foreach ($users as $user){
          echo $user->createUserCardHtml();
      }
    ?>
    </div>
</body>
</html>