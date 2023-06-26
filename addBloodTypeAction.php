<?php

include "security.php";
include "connection.php";


$BloodType=addslashes(strip_tags($_POST['BloodType']));

$Country=addslashes(strip_tags($_POST['Country']));

$BloodDescription=addslashes(strip_tags($_POST['BloodDescription']));

// $Date=addslashes(strip_tags($_POST['Date']));
$Date = Date('Y-m-d H:i:s');
$username=$_SESSION['username'];


if(!isset($errors))
{
    

    

$query="INSERT INTO Bloodtype(BloodType,Country,BloodDescription,Date)
                VALUES      ('$BloodType','$Country','$BloodDescription',Now())";


mysqli_query($con,$query) or die(mysqli_error($con));


header("location:admin.html");

}
else
echo "EROR Message:".$errors."</br>";


?>
        