<?php
include "connection.php";
include "security.php";
include "admin.html";

$query = "SELECT * FROM bloodtype ORDER BY Id ASC";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Types</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }
        
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        
        th,
        td {
            padding: 10px;
            text-align: left;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        td {
            border-bottom: 1px solid #ccc;
        }
        
        a {
            color: #4CAF50;
            text-decoration: none;
        }
        
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Blood Types</h1>
        <table>
            <tr>
                <th>Blood Type</th>
                <th>Country</th>
                <th>Blood Description</th>
                <th>Action</th>
                <th>Update</th>
            </tr>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['BloodType'] . "</td>";
                    echo "<td>" . $row['Country'] . "</td>";
                    echo "<td>" . $row['BloodDescription'] . "</td>";
                    echo "<td><a href=delete.php?id=" . $row['id'] . ">Delete</a></td>";
                    echo "<td><a href=edit.php?id=" . $row['id'] . ">Edit</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Data not found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
