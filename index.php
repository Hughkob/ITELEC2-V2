<?php
include_once 'config/settings-configuration.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SIGN IN</h1>
    <form action="dashboard/admin/authentication/admin-class.php" method="POST">
<input type="hidden" name="csrf token" value="<? echo $csrf_token ?>">
<input type="email" name="email" placeholder="enter email" required> <br>
<input type="password" name="password" placeholder="enter password" required> <br>
<button type="submit" name="btn-signin">SIGN IN</button>

    </form>
    <h1>REGISTRATION</h1>
    <form action="dashboard/admin/authentication/admin-class.php" method="POST">
    <input type="hidden" name="csrf token" value="<? echo $csrf_token ?>">
    <input type="text" name="username" placeholder="enter username" required> <br>
    <input type="email" name="email" placeholder="enter email" required> <br>
    <input type="password" name="password" placeholder="enter password" required> <br>
    <button type="submit" name="btn-sign up">SIGN UP</button>
    </form>
</body>
</html>