<?php
include('connection.php');
if(isset($_POST['upload'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $bloodtype=$_POST['bloodtype'];
    $gender=$_POST['gender'];
    $image=$_FILES['image'];
    $image_location=$_FILES['image']['tmp_name'];
    $image_name=$_FILES['image']['name'];
    $image_up="imagedonors/".$image_name;
    $insert="INSERT INTO donors (name,age,phone,email,bloodtype,gender,image) VALUES ('$name','$age','$phone','$email','$bloodtype','$gender','$image_up')";
    mysqli_query($con,$insert);
    if(move_uploaded_file($image_location,'imagedonors'.$image_name)){
        echo "<script>alert('Thank you for visiting [Website Name]. Together, we can save lives, one drop at a time. ')</script>";
    }else{
        echo "<script>alert('Something Wrong')</script>";
    }
    header('location:main.php');
}
?>