<?php
session_start(); // Start session at the beginning

if (isset($_POST['btn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $conpassword = $_POST['con'];

    // Connect to the database
    $con = mysqli_connect('localhost', 'root', '', 'project');

    // Check if passwords match
    if ($password !== $conpassword) {
        $signupError = "Passwords do not match!";
    } else {
        // Insert user data into database
        $res = "INSERT INTO `pro1`(`Password`, `Name`, `Email`, `conformpassword`) VALUES ('$password','$name','$email','$conpassword')";
        if (mysqli_query($con, $res)) {
            // Set session variables
            $_SESSION['username'] = $name;
            // Redirect to home page
            header("location:index.php");
            exit();
        } else {
            $signupError = "Error: " . mysqli_error($con);
        }
    }

    // Close the database connection
    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Glassmorphism Signup Form Tutorial in HTML CSS</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <style media="screen">
    *,
    *:before,
    *:after {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    body {
      background-color: #080710;
    }
    .background {
      width: 430px;
      height: 620px;
      position: absolute;
      transform: translate(-50%, -50%);
      left: 50%;
      top: 50%;
    }
    .background .shape {
      height: 200px;
      width: 200px;
      position: absolute;
      border-radius: 50%;
    }
    .shape:first-child {
      background: linear-gradient(#1845ad, #23a2f6);
      left: -80px;
      top: -80px;
    }
    .shape:last-child {
      background: linear-gradient(to right, #ff512f, #f09819);
      right: -30px;
      bottom: -80px;
    }
    form {
      height: 670px;
      width: 400px;
      background-color: rgba(255, 255, 255, 0.13);
      position: absolute;
      transform: translate(-50%, -50%);
      top: 50%;
      left: 50%;
      border-radius: 10px;
      backdrop-filter: blur(10px);
      border: 2px solid rgba(255, 255, 255, 0.1);
      box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
      padding: 50px 35px;
    }
    form * {
      font-family: 'Poppins', sans-serif;
      color: #ffffff;
      letter-spacing: 0.5px;
      outline: none;
      border: none;
    }
    form h3 {
      font-size: 32px;
      font-weight: 500;
      line-height: 42px;
      text-align: center;
    }

    label {
      display: block;
      margin-top: 20px;
      font-size: 16px;
      font-weight: 500;
    }
    input {
      display: block;
      height: 50px;
      width: 100%;
      background-color: rgba(255, 255, 255, 0.07);
      border-radius: 3px;
      padding: 0 10px;
      margin-top: 8px;
      font-size: 14px;
      font-weight: 300;
    }
    ::placeholder {
      color: #e5e5e5;
    }
    button {
      margin-top: 30px;
      width: 100%;
      background-color: #ffffff;
      color: #080710;
      padding: 15px 0;
      font-size: 18px;
      font-weight: 600;
      border-radius: 5px;
      cursor: pointer;
    }
    .social {
      margin-top: 20px;
      display: flex;
    }
    .social div {
      width: 150px;
      border-radius: 3px;
      padding: 5px 10px 10px 5px;
      background-color: rgba(255, 255, 255, 0.27);
      color: #eaf0fb;
      text-align: center;
    }
    .social div:hover {
      background-color: rgba(255, 255, 255, 0.47);
    }
    .social .fb {
      margin-left: 25px;
    }
    .social i {
      margin-right: 4px;
    }

    .password-strength {
      margin-top: 8px;
      font-size: 14px;
    }

    .weak {
      color: red;
    }

    .normal {
      color: orange;
    }

    .strong {
      color: green;
    }
  </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form onsubmit="return validateForm()" method="POST" action="">
        <h3>Sign Up</h3>
        <label for="name">Name</label>
        <input type="text" placeholder="Full Name" id="name" name="name" pattern="[A-Za-z\s]+" title="Name should only contain letters and spaces" required>
        <label for="email">Email</label>
        <input type="email" placeholder="Email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter a valid email address" required>
        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=]).{8,}" title="Password must be at least 8 characters long, contain at least one uppercase letter, one lowercase letter, one number, and one special character (@#$%^&+=)" required oninput="checkPasswordStrength()">
        <div id="password-strength" class="password-strength"></div>
        <label for="confirm-password">Confirm Password</label>
        <input type="password" placeholder="Confirm Password" id="confirm-password" name="con" required>
        <button type="submit" name="btn">Sign Up</button>
        <?php if (isset($signupError)) { echo "<div class='message error'>$signupError</div>"; } ?>
        <br>
        <br>
        <h6 style="font-weight: 100; font-style: initial; position: absolute; text-align: center; left: 100px">Already have an account? <a href="login.php">Login</a></h6>
    </form>

    <script>
        function validateForm() {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm-password').value;

            if (password !== confirmPassword) {
                alert("Passwords do not match!");
                return false;
            }

            return true;
        }

        function checkPasswordStrength() {
            const password = document.getElementById('password').value;
            const strengthElement = document.getElementById('password-strength');
            let strength = 'Weak';
            let strengthClass = 'weak';

            if (password.length >= 8) {
                const hasLowerCase = /[a-z]/.test(password);
                const hasUpperCase = /[A-Z]/.test(password);
                const hasNumbers = /[0-9]/.test(password);
                const hasSpecial = /[@#$%^&+=]/.test(password);

                const strengthCriteria = [hasLowerCase, hasUpperCase, hasNumbers, hasSpecial].filter(Boolean).length;

                if (strengthCriteria >= 3) {
                    strength = 'Strong';
                    strengthClass = 'strong';
                } else if (strengthCriteria === 2) {
                    strength = 'Normal';
                    strengthClass = 'normal';
                }
            }

            strengthElement.textContent = `Password Strength: ${strength}`;
            strengthElement.className = `password-strength ${strengthClass}`;
        }
    </script>
</body>
</html>
