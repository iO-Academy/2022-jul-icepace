<?php

use Icepace\UsersHydrator;

require_once "vendor/autoload.php";
$db = new PDO('mysql:host=db; dbname=icepace', 'root', 'password');
$users = UsersHydrator::getAllUsers($db);

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
</body>
</html>