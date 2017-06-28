<?php
$dbh = null;
try {
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=forum_ssb', 'root', '');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}