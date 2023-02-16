<html>
<head>
<title>registration form</title>
</head>

<h2>Register</h2>



<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['email'])) {
        // removes backslashes
        //$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        //$username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $firstname = stripslashes($_REQUEST['firstname']);
        $firstname = mysqli_real_escape_string($con, $firstname);
        $lastname = stripslashes($_REQUEST['lastname']);
        $lastname = mysqli_real_escape_string($con, $lastname);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $street = stripslashes($_REQUEST['street']);
        $street = mysqli_real_escape_string($con, $street);
        $city = stripslashes($_REQUEST['city']);
        $city = mysqli_real_escape_string($con, $city);
        $province = stripslashes($_REQUEST['province']);
        $province= mysqli_real_escape_string($con, $province);
        $postalcode = stripslashes($_REQUEST['postalcode']);
        $postalcode = mysqli_real_escape_string($con, $postalcode);
        $phone = stripslashes($_REQUEST['phone']);
        $phone = mysqli_real_escape_string($con, $phone);
       
        $query    = "INSERT into users (email,firstname,lastname,password,street,city,province,postalcode,phone)
                     VALUES ('$email', '$firstname','$lastname','" . md5($password) . "', '$street', '$city','$province','$postalcode','$phone')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    }else {
?>
<tbody>
<table>
<form  method="post">


<tr>
<td><label for="email">Email: </label></td>
<td><input id="email" maxlength="50" name="email" type="email" /></td>
</tr>

<tr>
<td><label for="firstname">Firstname: </label></td>
<td><input id="firstname" maxlength="50" name="firstname" type="text" /></td>
</tr>

<tr>
<td><label for="lastname">Lastname: </label></td>
<td><input id="lastname" maxlength="50" name="lastname" type="text" /></td>
</tr>

<tr>
<td><label for="password">Password </label></td>
<td><input id="password" maxlength="50" name="password" type="password" /></td>
</tr>



<tr>
<td><label for="street">Street:</label></td>
<td><input id="street" maxlength="100" name="street" type="text" /></td>
</tr>

<tr>
<td><label for="city">City</label></td>
<td><input id="city" maxlength="50" name="city" type="text" /></td>
</tr>

<tr>
<td><label for="province">Province:</label></td>
<td><input id="province" maxlength="50" name="province" type="text" /></td>
</tr>

<tr>
<td><label for="postalcode">Postalcode:</label></td>
<td><input id="postalcode" maxlength="6" name="postalcode" type="text" /></td>
</tr>

<tr>
<td><label for="phone">Phone:</label></td>
<td><input id="phone" maxlength="10" name="phone" type="number" /></td>
</tr>

<tr>
<td><input name="Submit" type="Submit" value="Register" /></td>
</tr>

</form>
<?php
    }
?>
</table>
</tbody>

</html>