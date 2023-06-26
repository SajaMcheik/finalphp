<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Donor Details</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            width: 250px;
            margin-right: 20px;
            margin-bottom: 20px;
            float: left;
        }
        
        .card-body {
            padding: 20px;
            background-color: #f8f9fa;
        }
        
        .card-title {
            font-size: 18px;
            margin-bottom: 10px;
        }
        
        .card-text {
            font-size: 14px;
            margin-bottom: 8px;
        }
        
        .blood-type {
            font-size: 12px;
            color: white;
            background-color: red;
            padding: 4px;
            border-radius: 4px;
        }
        
        .btn-back {
            font-size: 14px;
            padding: 6px 12px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <?php
    include("connection.php");
    $result = mysqli_query($con, "SELECT * FROM donors");
    while ($row = mysqli_fetch_array($result)) {
        echo "
        <main>    
            <div class='card'>
                <div class='card-body'>
                    <h5 class='card-title'>$row[name]</h5>
                    <p class='card-text'>Age: $row[age]</p>
                    <p class='card-text'>Phone: $row[phone]</p>
                    <p class='card-text'>Email: $row[email]</p>
                    <p class='card-text'>Blood Type: <span class='blood-type'>$row[bloodtype]</span></p>
                    <p class='card-text'>Gender: $row[gender]</p>
                    <a href='admin_cp.php' class='btn btn-danger btn-back'>Back</a>
                </div>
            </div>
        </main>";
    }
    ?>
</body>
</html>
