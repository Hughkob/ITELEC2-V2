<?php
require_once 'authentication/admin-class.php';

$admin = new ADMIN();
if(!$admin->isUserLoggedin())
{
  $admin->redirect('../../');
}

$stmt = $admin->runQuerry("SELECT * FROM user WHERE id = :id");
$stmt->execute(array(":id"=> $_SESSION['adminSession'] ));
$user_data = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style.css">
    <title>ADMIN DASHBOARD</title>
</head>
<body>
    <h1>WELCOME <?php   echo $user_data['email']?></h1>
    <button><a href="authentication/admin-class.php?admin_signout">SIGN OUT</a></button>
</body>
</html>