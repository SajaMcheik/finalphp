<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donors</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        #main {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 20px;
        }

        h2 {
            color: red;
        }

        img {
            width: 400px;
            max-width: 100%;
            margin-bottom: 20px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="file"] {
            display: none;
        }

        label {
            cursor: pointer;
            background-color: red;
            color: #fff;
            padding: 10px 15px;
            border-radius: 4px;
        }

        button {
            background-color: red;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        a {
            display: block;
            margin-top: 10px;
            color: #4CAF50;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div id="main">
        <form action="donorsaction.php" method="post" enctype="multipart/form-data">
            <h2>Every Two Seconds Someone Needs Blood</h2>
            <img src="img/donor.webp" alt="">
            <input type="text" name="name" placeholder="Full Name" required><br><br>
            <input type="text" name="age" placeholder="Age" required><br><br>
            <input type="text" name="phone" placeholder="Phone" required><br><br>
            <input type="text" name="email" placeholder="Email" required><br><br>
            <select name="bloodtype" id="bloodType" required>
                <option value="">Select Blood Type</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select><br><br>
            <select name="gender" id="gender" required>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br><br>
            <input type="file" id="file" name="image">
            <label for="file">Upload Identity Card</label>
            <button name="upload">Save Life, Give Blood</button>
            <a href="main.php">Back To Home Page</a>
        </form>
    </div>
</body>
</html>
