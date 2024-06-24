<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOURSOLUTION</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');

        .demo {
            margin: 50px;
        }

        .cir {
            height: 25vh;
        }

        body {
            margin: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* CSS for header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f5f5f5;
        }

        .header .logo {
            font-size: 30px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight: 300;
            color: #000;
            text-decoration: none;
            margin-left: 30px;
        }

        .nav-items {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: #f5f5f5;
            margin-right: 20px;
        }

        .nav-items a {
            text-decoration: none;
            color: #000;
            padding: 35px 20px;
        }
    </style>
</head>
<body>
    <header class="header">
        <h1 class="logo">YOURSOLUTION</h1>
        <nav class="nav-items">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <?php if (isset($_SESSION['username'])): ?>
                <a href="logout.php" style="background-color: #5edaf0;
                  color: #000;
                  padding: 10px 25px;
                  border: none;
                  border-radius: 5px;
                  font-size: 20px;
                  cursor: pointer;
                  box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4)">Logout</a>
            <?php else: ?>
                <a href="signup.php" style="background-color: #5edaf0;
                  color: #000;
                  padding: 10px 25px;
                  border: none;
                  border-radius: 5px;
                  font-size: 20px;
                  cursor: pointer;
                  box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4)">Sign Up/Login</a>
            <?php endif; ?>
        </nav>
    </header>
</body>
</html>
