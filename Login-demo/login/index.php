<?php

session_start();
    include("connection.php");
    include("function.php");

    $user_data = check_login($con);

    $_SESSION;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fablab winam</title>
    <link rel="shortcut icon" type="image/icon" href="images/fablab-logo.png"/>
</head>
<body>
    <a href="logout.php"></a>
    <h1>This is the landing page</h1>
    <br>
    Hello, Fullname
</body>
</html>