<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple HTML HomePage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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

        /* CSS for main element */
        .intro {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 520px;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%),
                url("https://images.unsplash.com/photo-1587620962725-abab7fe55159?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1031&q=80");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .intro h1 {
            font-family: sans-serif;
            font-size: 60px;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            margin: 0;
        }

        .intro p {
            font-size: 20px;
            color: #d1d1d1;
            text-transform: uppercase;
            margin: 20px 0;
        }

        .intro button {
            background-color: #5edaf0;
            color: #000;
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4);
        }

        .achievements {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 40px 80px;
        }

        .achievements .work {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 0 40px;
        }

        .achievements .work i {
            width: fit-content;
            font-size: 50px;
            color: #333333;
            border-radius: 50%;
            border: 2px solid #333333;
            padding: 12px;
        }

        .achievements .work .work-heading {
            font-size: 20px;
            color: #333333;
            text-transform: uppercase;
            margin: 10px 0;
        }

        .achievements .work .work-text {
            font-size: 15px;
            color: #585858;
            margin: 10px 0;
        }

        .about-me {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 80px;
            border-top: 2px solid #eeeeee;
        }

        .about-me img {
            width: 500px;
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .about-me-text h2 {
            font-size: 30px;
            color: #333333;
            text-transform: uppercase;
            margin: 0;
        }

        .about-me-text p {
            font-size: 15px;
            color: #585858;
            margin: 10px 0;
        }

        .container {
            display: flex;
            height: auto;
            width: 100%;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .container1 {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .image-container {
            margin: 10px;

        }

        .image-container img {
            height: 300px;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .image-container img:hover {
            transform: scale(1.1);
        }

        .login-message {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 20px;
            border-radius: 10px;
            z-index: 9999;
        }
    </style>
</head>

<body>

<header class="header">
        <h1 class="logo">YOURSOLUTION</h1>
        <nav class="nav-items">
            <a href="#">Home</a>
            <a href="about.php">About</a>
            <?php if (isset($_SESSION['username'])): ?>
                <a href="logout.php" style="background-color: #5edaf0;
      color: #000;
      padding: 10px 25px;
      border: none;
      border-radius: 5px;
      font-size: 20px;
      cursor: pointer;
      box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4)" >Logout</a>
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
    <main>
        <div class="intro">
            <?php
            if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                echo "<h1>Welcome, $username!</h1>";
            } else {
                echo "<h1>Welcome!</h1>";
            }
            ?>
            <p>STUDENTS OF IT DEPARTMENT.</p>
            <button>Learn More</button>
        </div>
    </main>
    <div style="margin:50px;">
        <h2 style="font-family: Georgia, 'Times New Roman', Times, serif   ;font-size: 30px; color: #0e0e0e; text-transform: uppercase; text-align:center; left:30%; margin:50px; text-decoration: underline; font-weight: 700;">Choose your desired semester!!</h2>
    </div>
    <div class="container">
        <div class="container1">
            <div class="image-container">
                <a href="<?php echo isset($_SESSION['username']) ? 'sem1.php' : 'signup.php'; ?>">
                    <img src="./Photos/1.png" alt="Image 1">
                </a>
            </div>
            <div class="image-container">
                <a href="<?php echo isset($_SESSION['username']) ? 'sem2.php' : 'signup.php'; ?>">
                    <img src="./Photos/2.png" alt="Image 2">
                </a>
            </div>
            <div class="image-container">
                <a href="<?php echo isset($_SESSION['username']) ? 'sem3.php' : 'signup.php'; ?>">
                    <img src="./Photos/3.png" alt="Image 3">
                </a>
            </div>
        </div>
        <div class="container1">
            <div class="image-container">
                <a href="<?php echo isset($_SESSION['username']) ? 'sem4.php' : 'signup.php'; ?>">
                    <img src="./Photos/4.png" alt="Image 4">
                </a>
            </div>
            <div class="image-container">
                <a href="<?php echo isset($_SESSION['username']) ? 'sem5.php' : 'signup.php'; ?>">
                    <img src="./Photos/5.png" alt="Image 5">
                </a>
            </div>
            <div class="image-container">
                <a href="<?php echo isset($_SESSION['username']) ? 'sem6.php' : 'signup.php'; ?>">
                    <img src="./Photos/6.png" alt="Image 6">
                </a>
            </div>
        </div>
    </div>

</body>

</html>
