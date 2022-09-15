<?php
require_once 'vendor/autoload.php';

use Icepace\LoginUser;
use Icepace\UserCreator;

print_r($_POST);
$db = new PDO('mysql:host=db; dbname=icepace', 'root', 'password');
LoginUser::checkingUserExists($db);

