<?php

require 'dbconnect.php';

$message = null;

if (isset($_POST['register'])) {
    $username = htmlentities($_POST['username']);
    $email = htmlentities($_POST['email']);
    $password = htmlentities($_POST['password']);
    $confirm_pwd = htmlentities($_POST['confirm_pwd']);

    if (!$username || !$email || !$password || !$confirm_pwd) {
        $message = "Alle velden zijn verplicht!";
    } elseif ($password != $confirm_pwd) {
        $message = "De wachtwoorden komen niet overeen!";
    } else {
        $query = $dbh->prepare("SELECT * FROM users WHERE username = :username AND email = :email");
        $query->execute([
            ':username' => $username,
            ':email' => $email
        ]);
        if ($query->rowCount() > 0) {
            $message = "De ingevulde username is al in gebruik.";
        } else {
            $query = $dbh->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
            $query->execute([
                ':username' => $username,
                ':password' => hash("SHA512", $password),
                ':email' => $email
            ]);
            $message = "Your account has been created. Go back to log in.";
        }
    }

}
?>