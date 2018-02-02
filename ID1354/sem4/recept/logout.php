<?php

session_start();
$page = $_SESSION['gotopage'];
unset($_SESSION['logged_in']);
unset($_SESSION['username']);
unset($_SESSION['password']);
session_destroy();

header("refresh:2;url={$page}");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
               <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="stylesheet.css">
        <title>Logout</title>
    </head>
    <body>
        <div class="textblock"><p>Logging out and redirecting back to previous page in 5 seconds!</p></div>
    </body>
</html>
