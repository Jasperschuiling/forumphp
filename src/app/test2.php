<?php
session_start();

echo "Welcome". $_SESSION['username'];


if (isset($_POST['logout'])){
    session_start();
    session_destroy();

    header('location: test.php');
}



?>


<html>
<head>
    <title>Logged in.</title>
</head>
<body>
<form method="post" name="logout">
    <input type="submit" name="logout" value="log me out">

</form>
</body>
</html>