<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semester 1 | YOURSOLUTION</title>
    <style>
            body {
            margin: 0;
            box-sizing: border-box;
            
            font-family: Georgia, 'Times New Roman', Times, serif 
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
        
        .welcome-message-sem1 {
            background-image: url('image copy 4.png');
            background-size: cover;
            background-position: center;
            height: 30vh;
            color: black;
            text-align: center;
            padding: 50px 0;
            margin-bottom: 30px;
        }
        .welcome-message-sem1 h1{
            text-align: center;
            margin-top: 12vh;
            color:white;
        }

        .subject-selection-sem1 {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }

        .subject-selection-sem1 a {
            margin: 10px;
            border: 2px solid #333;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .subject-selection-sem1 a img {
            width: 300px;
            height: 300px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .subject-selection-sem1 a:hover {
            transform: scale(1.1);
        }

        .additional-info-sem1 {
            text-align: center;
            color: #333;
            font-size: 18px;
            line-height: 1.5;
            margin: 0 auto;
            max-width: 800px;
        }
    </style>
</head>

<body>
    <?php
       include 'navigation.php';
    ?>

    <div class="welcome-message-sem1">
        <?php


        // Check if user is logged in
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            echo "<h1>Welcome, $username!</h1>";
        } else {
            echo "<h1>1st Semester</h1>";
        }
        ?>
    </div>

    <h2 style="font-family: Georgia, 'Times New Roman', Times, serif   ;font-size: 30px; color: #0e0e0e; text-transform: uppercase; margin: 0; text-align: center; font-weight: lighter; ">Choose your desire semester!!</h2>

    <div class="subject-selection-sem1">
        <a href="./subject-resources/sem1/Maths.php"><img src="./Photos/sem1/1.png" alt="Subject 1"></a>
        <a href="./subject-resources/sem1/iis.php"><img src="./Photos/sem1/2.png" alt="Subject 2"></a>
        <a href="./subject-resources/sem1/python.php"><img src="./Photos/sem1/3.png" alt="Subject 3"></a>
        <a href="./subject-resources/sem1/cs.php"><img src="./Photos/sem1/4.png" alt="Subject 4"></a>

    </div>



</body>

</html>
