<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url("img/home.jpg") no-repeat center center fixed;
            background-size: cover;
        }

        .navbar {
            background-color: #222;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 20px;
            margin-left: 20px;
            color: #fff;
            text-decoration: none;
        }

        .navbar-menu {
            display: flex;
            margin-right: 20px;
        }

        .navbar-menu a {
            color: #fff;
            text-decoration: none;
            margin-left: 15px;
        }

        .navbar-menu a:hover {
            text-decoration: underline;
        }

        @media only screen and (max-width: 600px) {
            .navbar {
                flex-direction: column;
                padding: 10px;
            }

            .navbar-brand {
                margin-bottom: 10px;
            }

            .navbar-menu {
                margin-top: 10px;
                justify-content: center;
            }

            .navbar-menu a {
                margin-left: 0;
                margin-right: 15px;
            }
        }

        .content-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .text-content {
            text-align: center;
        }

        .text-content h1 {
            color: #fff;
            font-size: 48px;
        }

        .text-content h3 {
            color: #fff;
            font-size: 24px;
            margin-top: 20px;
        }
    </style>
</head>
<body >
    <?php
    include('connection.php')
    ?>
    <div class="navbar">
        <a href="main.php" class="navbar-brand">Life Source Heroes</a>
        <div class="navbar-menu">
            <a href="main.php">Home</a>
            <a href="donors.php">Donate</a>
            <a href="user_cp.php">Blood Needed</a>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="text-content">
            <h1>Be A Hero Give Blood</h1>
            <h3>Welcome to our blood donation website!</h3>
        </div>
    </div>
</body>
</html>
