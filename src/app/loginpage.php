<?php
    require 'dbconnect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/login.css">
    <title>Login Pagina</title>

    <?php include 'head.php'; ?>

</head>

<body style="background-color: gray">

<div id="main-wrapper">
    <h2 style="text-align: center;">Login</h2>
    <img id="avatarimg" src="../img/avatar.png">

    <form class="login_form" method="POST">
        <label><b>Username</label> <br/>
        <input type="text" name="username" class="inputvalues" style="font-family: 'Century Gothic'"/><br/>

        <label><b>Password</label><br/>
        <input type="password" name="password" class="inputvalues" style="font-family: 'Century Gothic'"/><br/>

        <?php if (!empty($message)): ?>
            <p class="headtext"><?=$message?></p>
        <?php endif ?>

        <input type="submit" name="login" id="login_btn" value="Login"/><br/>
    </form>

</div>
<?php include 'foot.php' ?>


</body>
</html>