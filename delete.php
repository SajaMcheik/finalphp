<?php
// Database Connection
include "connection.php";

// ID variable
$IID = $_GET['id'];

// Data Deletion
$query ="DELETE FROM bloodtype WHERE Id='$IID'";
$result=mysqli_query($con,$query);

header("location:viewrequest.php");
?>