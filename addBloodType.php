<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Add Blood Request</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }
        
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        
        label {
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        
        input[type="file"] {
            margin-top: 10px;
        }
        
        .datetime-container {
            display: flex;
            align-items: center;
        }
        
        .date-input,
        .time-input {
            flex: 1;
        }
        
        .date-input input,
        .time-input input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        button[type="reset"] {
            background-color: #f44336;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add Blood Request</h1>
        <img src="img/addbloodimg.webp" alt="blood" width="500">
        <form action="addBloodTypeAction.php" method="post" enctype="multipart/form-data">
            <label for="bloodType">Blood Type:</label>
            <select name="BloodType" id="bloodType" required>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
            <br><br>
            <label for="countryOfItem">City:</label>
            <input type="text" name="Country" id="countryOfItem" required>
            <br><br>
            <label for="itemDescription">Blood Description:</label>
            <textarea name="BloodDescription" id="itemDescription" rows="5" required></textarea>
            <br><br>
            <br><br>
            <button type="submit">Submit</button>
            <button type="reset">Clear Data</button>
        </form>
    </div>
    <center>
        <h3>LifeLine Blood</h3>
    </center>
</body>
</html>
