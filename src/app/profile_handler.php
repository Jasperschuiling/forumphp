<?php
require 'dbconnect.php';

if (isset($_SESSION['username'])) {
    $statement_data = $dbh->prepare("SELECT * FROM users WHERE username = :username");
    $statement_data->execute([
        ':username' => $_SESSION['username']
    ]);
    if ($statement_data->rowCount() >0) {

        $data_row = $statement_data->fetch();

        $_SESSION['email'] = $data_row['email'];
    }
}

