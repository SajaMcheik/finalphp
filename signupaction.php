<?php
include('connection.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query="insert into users (Name,Email,Password) values ('$name','$email','$password')";
    mysqli_query($con,$query);
    header('location:admin.html');
?>