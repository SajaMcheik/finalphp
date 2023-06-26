<?php
        include('connection.php');
        if(isset($_POST['update'])){
            $ID=$_POST['id'];
            $type=$_POST['BloodType'];
            $country=$_POST['Country'];
            $desc=$_POST['BloodDescription'];
            $update = "UPDATE bloodtype SET BloodType='$type', Country='$country', BloodDescription='$desc' WHERE id=$ID";

            mysqli_query($con,$update);
        }
        header('location:viewrequest.php')
?>