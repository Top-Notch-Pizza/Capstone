<html>
<head>
<title>registration form</title>
</head>

<h2>Login</h2>

<form  method="post">
<table>
<tbody>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['email'])) {
        $email = stripslashes($_REQUEST['email']);    // removes backslashes
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM  users  WHERE email='$email'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email'] = $email;
            // Redirect to user dashboard page
            header("Location: home.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect email/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>



<tbody>
<table>
<form  method="post">
<tr>
<td><label for="email">Email: </label></td>
<td><input id="email" maxlength="50" name="email" type="email" /></td>
</tr>

<tr>
<td><label for="password">Password </label></td>
<td><input id="password" maxlength="50" name="password" type="password" /></td>
</tr>

<tr>
<td><input name="Submit" type="Submit" value="Login" /></td>
</tr>
</form>
</table>
</tbody>

<?php
    }
?>
</html>