<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Bank Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .logo {
      text-align: center;
      margin-bottom: 20px;
    }

    .logo img {
      width: 150px;
      height: auto;
    }

    h2 {
      text-align: center;
      color: #333;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      color: #666;
    }

    .form-group input[type="text"],
    .form-group input[type="password"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-group input[type="submit"] {
      width: 100%;
      padding: 8px;
      color: #fff;
      background-color: #007bff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .form-group input[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
  <h2>Blood Bank and Donor Management</h2>
    <div class="logo">
      <img src="img/logo1.jpg" alt="Blood Bank Logo">
    </div>
    
    <?php
    if(isset($_GET['error']) && $_GET['error'] == 1){
      echo '<p class="error">Invalid email or password</p>';
    }
    ?>
    <form method="post" action="loginaction.php">
    <form>
      <div class="form-group">
        <label for="username">Email</label>
        <input type="text" id="username" name="txtEmail" placeholder="Enter your username">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="txtPassword" placeholder="Enter your password">
      </div>
      <div class="form-group">
        <input type="submit" value="Log In">
      </div>
    </form>
  </div>
</body>
</html>

