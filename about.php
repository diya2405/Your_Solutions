<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - YourSolution</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

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
        
        .intro {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 520px;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.7) 100%),
                url("https://images.unsplash.com/photo-1587620962725-abab7fe55159?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1031&q=80");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            text-align: center;
            color: #ecf0f1;
            padding: 0 20px;
        }

        .intro h1 {
            font-size: 50px;
            font-weight: 700;
            margin: 0;
        }

        .intro p {
            font-size: 20px;
            margin: 20px 0;
            padding: 10px;
            max-width: 800px;
            text-align: justify;
        }
        .head-main{
            font-size: 400px;
            font-weight: bold;
            margin: 20px 0;
            padding: 10px;
            max-width: 800px;
            text-align: justify;   
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .team-members {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 50px;
        }

        .team-member {
            text-align: center;
            margin: 20px;
            max-width: 500px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .team-member img {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            object-fit: cover;
            object-position: top;
            transition: transform 0.3s;
        }

        .team-member img:hover {
            transform: scale(1.05);
        }

        .team-member h3 {
            font-size: 22px;
            color: #333;
            margin-top: 20px;
        }

        .team-member p {
            font-size: 16px;
            color: #666;
            margin-top: 10px;
        }

        .about-me {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-top: 20px;
            text-align: left;
        }

        .about-me-text h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        .about-me-text p {
            font-size: 16px;
            color: #666;
            margin-bottom: 15px;
        }

        .footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 20px 0;
            text-align: center;
            margin-top: 50px;
            width: 100%;
        }

        .footer a {
            color: #ecf0f1;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
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
            <p style="font-size: 50px;" class="head-main">Students of IT Department</p>
            <p>We are a dedicated group of students from the IT Department at Government Polytechnic for Girls, Surat. Our mission is to foster a collaborative and innovative learning environment where we can grow our skills in technology and problem-solving. Here, you'll find resources, projects, and updates on our latest endeavors. Whether you're a fellow student, a teacher, or someone interested in our work, we invite you to explore our page and connect with us!</p>
            
        </div>
    </main>
    <div class="container">
        <h2 style="font-size: 30px; color: #333; text-transform: uppercase; text-align: center; margin: 50px; font-weight: 700;">Meet the Team</h2>
        <div class="team-members">
            <div class="team-member">
                <img src="diya.jpg" alt="Profile 1">
                <h3>Shah Diya Rajan</h3>
                <div class="about-me">
                    <div class="about-me-text">
                        <h2>About Me</h2>
                        <p>My name is Shah Diya Rajan. I'm a student of the IT Department at Government Polytechnic for Girls, Surat. Currently, I'm in the fourth semester.</p>
                        <p>I have a strong passion for coding and enjoy experimenting with new technologies. Solving problems and creating innovative solutions through code is what excites me the most.</p>
                        <p>My enrollment number is 226150316063. Feel free to connect with me if you share similar interests or have any questions!</p>
                    </div>
                </div>
            </div>
            <div class="team-member">
                <img src="kripa.jpg" alt="Profile 2">
                <h3>Kripa Pattiwala</h3>
                <div class="about-me">
                    <div class="about-me-text">
                        <h2>About Me</h2>
                        <p>My name is Kripa Pattiwala. I'm also a student of the IT Department at Government Polytechnic for Girls, Surat, currently in the fourth semester.</p>
                        <p>I am passionate about web development and design. I enjoy creating user-friendly and visually appealing websites.</p>
                        <p>My enrollment number is 226150316050. Feel free to reach out to me for collaboration or any queries!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2024 YourSolution. All rights reserved. Designed with <i class="fas fa-heart"></i> by YourSolution Team</p>
    </footer>

</body>

</html>
