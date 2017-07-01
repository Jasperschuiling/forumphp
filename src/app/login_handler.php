<?php
require'dbconnect.php';
$message = null;
session_start();

if (isset($_POST['login'])) {
    $username = htmlentities($_POST['username']);
    $password = htmlentities($_POST['password']);
    if (!$username || !$password) {
        $message = 'Both fields are required.';
    } else {
        $login_query = $dbh->prepare('select * from users where password = :password and username = :username');
        $login_query->execute([
            ':password' => hash('sha512', $password),
            ':username' => $username
        ]);
        if ($login_query->rowCount() > 0) {
            $row = $login_query->fetchAll();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];

            header('Location: index.php');
        } else {
            $message = 'Incorrect username and password.';
        }
    }
}

