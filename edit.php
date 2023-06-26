<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        select,
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
    <title>Edit</title>
</head>
<body>
    <?php
    include('connection.php');
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM bloodtype WHERE id = $id";
        $result = mysqli_query($con, $query);

        // Check if the query was successful
        if ($result && mysqli_num_rows($result) > 0) {
            $data = mysqli_fetch_assoc($result);
        } else {
            echo "No data found.";
        }
    } else {
        echo "Invalid ID.";
    }
    ?>

    <div class="container">
        <form action="update.php" method="post" enctype="multipart/form-data">
            <h2>Update Blood</h2>
            <input type="hidden" name="id" value='<?php echo $data['id']; ?>'>

            <label for="BloodType">Blood Type:</label>
            <select name="BloodType" id="BloodType">
                <option value="A+" <?php if ($data['BloodType'] == 'A+') echo 'selected'; ?>>A+</option>
                <option value="A-" <?php if ($data['BloodType'] == 'A-') echo 'selected'; ?>>A-</option>
                <option value="B+" <?php if ($data['BloodType'] == 'B+') echo 'selected'; ?>>B+</option>
                <option value="B-" <?php if ($data['BloodType'] == 'B-') echo 'selected'; ?>>B-</option>
                <option value="AB+" <?php if ($data['BloodType'] == 'AB+') echo 'selected'; ?>>AB+</option>
                <option value="AB-" <?php if ($data['BloodType'] == 'AB-') echo 'selected'; ?>>AB-</option>
                <option value="O+" <?php if ($data['BloodType'] == 'O+') echo 'selected'; ?>>O+</option>
                <option value="O-" <?php if ($data['BloodType'] == 'O-') echo 'selected'; ?>>O-</option>
            </select>

            <label for="Country">Country:</label>
            <input type="text" name="Country" value='<?php echo $data['Country']; ?>'>

            <label for="BloodDescription">Blood Description:</label>
            <input type="text" name="BloodDescription" placeholder="Blood Description" value='<?php echo $data['BloodDescription']; ?>'>

            <button type="submit" name="update">Update Data</button>
        </form>
    </div>
</body>
</html>
