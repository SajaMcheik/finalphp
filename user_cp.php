<?php
// Assuming you have a database connection established and stored in $con variable
include "connection.php";

$query = "SELECT * FROM bloodtype ORDER BY Id ASC";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank and Donor Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .card {
            animation: fadeInUp 0.5s ease;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .blood-type {
            background-color: #f44336;
            color: #fff;
            padding: 10px;
            border-radius: 4px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Blood Bank and Donor Management</h1>
        <div class="row">
            <?php
            // Assuming you have a database connection established and stored in $con variable

            // Check if the connection is valid
            if ($con) {
                // Fetch data from the database
                $query = "SELECT * FROM bloodtype";
                $result = mysqli_query($con, $query);

                // Display the data in the cards
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="col-md-4">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title blood-type">' . $row['BloodType'] . '</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">' . $row['Country'] . '</h6>
                                        <p class="card-text">' . $row['BloodDescription'] . '</p>
                                        <a href="donors.php?Id=' . $row['id'] . '" class="btn btn-primary">Click here to donate</a>
                                    </div>
                                </div>
                            </div>';
                    }
                } else {
                    echo '<div class="col-12">
                            <div class="alert alert-danger" role="alert">No data available</div>
                        </div>';
                }

                // Close the database connection
                mysqli_close($con);
            } else {
                echo '<div class="col-12">
                        <div class="alert alert-danger" role="alert">Database connection error</div>
                    </div>';
            }
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5
