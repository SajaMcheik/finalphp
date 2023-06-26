<?php
session_start();
include "connection.php";

$email = $_POST['txtEmail'];
$password = $_POST['txtPassword'];

$qry = "SELECT * FROM users WHERE Email='$email' AND Password='$password'";
$result = mysqli_query($con, $qry) or die(mysqli_error($con));

if(mysqli_num_rows($result) > 0){
    $_SESSION['username'] = $email;
    header("location: admin.html");
    exit();
}
else {
    header("location: login.php?error=1");
exit();
}
?>