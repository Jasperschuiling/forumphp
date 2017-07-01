<?php

include 'login_handler.php';

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $nav = "<li style=\"float:right\"><a style=\"text-decoration: none;\" href=\"logout.php\" >Logout</a></li>
            <li style=\"float:right\"><a style=\"text-decoration: none;\" href=\"profile.php\" >My Profile</a></li>";
} else {
    $nav = "<li style=\"float:right\"><a style=\"text-decoration: none;\" href=\"loginpage.php\" >Login</a></li>
            <li style=\"float:right;\"><a href=\"registerpage.php\" style=\"text-decoration: none;\">Sign up</a></li>";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/head.css">
    <meta charset="UTF8">
</head>
<body>
<ul>
    <li><a style="text-decoration: none;" href="index.php" >Home</a></li>
    <li><a style="text-decoration: none;" href="#">Guides</a></li>
    <li><a style="text-decoration: none;" href="#">Events</a></li>

    <?= $nav ?>
</ul>
</body>
</html>