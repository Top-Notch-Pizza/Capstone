<?php
//include auth_session.php file on all user panel pages
require('db.php');
include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to home page<?php echo $_SESSION['email']; ?></h1>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
