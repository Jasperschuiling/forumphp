<?php
include_once 'authentication.php';
include_once 'profile_handler.php';

?>



<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/profile.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body>

<?php

include_once 'head.php';

?>

<div class="userdate_wrapper">
    <div class="data">
        <form class="profile" method="post">
            <h2>Your profile </h2>
            <p>Your username is: <strong><?= $_SESSION['username']; ?></strong></p>
            <label>Your email is: <strong><?= $_SESSION['email']; ?></strong></label>
            <br>
            <p><b>Change Email</b></p>
            <input type="email" name="change_email" class="change_email" placeholder="Change Email">
            <button type="submit" name="change_email_btn" class="change_email_btn">Change</button>
            <p><b>Change Password<b></b></p>
            <input type="password" name="change_password" class="change_password" placeholder="Change Password">
            <button type="submit" name="change_password_btn" class="change_password_btn">Change</button>

        </form>
    </div>
</div>




<?php
include_once 'foot.php';
?>
</body>
</html>


