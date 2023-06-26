<?php session_start();


if(!isset($_SESSION['username']))
   header("location:login.php");
else
   echo "<hk>you are logged in as : " .$_SESSION['username'];

?>