<?php
require_once "vendor/autoload.php";

function displayUsers(array $allUsers): string
{
    $allUsersOutputString = '<div class="allUserCardContainer">';

    foreach ($allUsers as $user){
        $allUsersOutputString .= $user->creatUserCardHtml();
    }
    $allUsersOutputString .= "</div>";
    return $allUsersOutputString;
}

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