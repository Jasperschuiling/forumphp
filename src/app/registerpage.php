<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/register.css">
    <title>Register page</title>
    <?php include 'head.php';  include 'register_handler.php'?>
</head>

<body style="background-color: gray">





<div id="main-wrapper">
    <h2 style="text-align: center;">Sign up!</h2>
    <img id="avatarimg" src="../img/avatar.png">

    <form class="register_form" method="POST">
        <label><b>Username</label> <br/>
        <input type="text" name="username" class="inputvalues"/><br/>

        <label><b>Email</label><br/>
        <input type="text" name="email" class="inputvalues"/><br/>

        <label><b>Password</label><br/>
        <input type="password" name="password" class="inputvalues"/><br/>

        <label><b>Repeat Password</label><br/>
        <input type="password" name="confirm_pwd" class="inputvalues"/><br/>

        <?php if (!empty($message)): ?>
            <p class="headtext"><?=$message?></p>
        <?php endif ?>

        <input type="submit" id="signup_btn" name="register" value="Create Account."/><br/>
    </form>
</div>
<?php include 'foot.php' ?>
</body>

</html>