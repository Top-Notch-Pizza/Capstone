<?php
if($_SESSION['usertype'] != "admin") {
    header("Location: index.php");
    exit();
}

?>