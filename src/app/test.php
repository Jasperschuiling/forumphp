<?php

session_start();

$conn = new PDO('mysql:host=localhost;dbname=forum_ssb', 'root', '');

if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $conn->prepare("SELECT COUNT(`id`) FROM `users` WHERE `username` ='$username' AND `password` = '$password'");
    $query->execute();

    $count = $query->fetchColumn();

    if ($count == "1"){
        $_SESSION['username'] = $username;

        header('location: test2.php');
    }

}
?>
<html>
<head>
    <title> test</title>
</head>
<body>
<form method="POST" name="login">
    <input type="text" name="username">
    <input type="text" name="password">
    <input type="submit" name="login" value="LOG ME IN!"
</form>
</body>

</html>