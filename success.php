<?php
//include auth_session.php file on all user panel pages
require('db.php');
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>success</title>
</head>
<body>
      <div>

            <h3>Your Transaction has been Successfully Completed</h3>
            <a href="product.php">
         Shop more pizza
    </a>
        
      </div>  
</body>
</html>