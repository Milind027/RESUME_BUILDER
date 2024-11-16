<?php
session_start();
include('connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    // Query to find the user
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        
        // Verify password
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['email'] = $user['email'];
            
            // Redirect to index.php
            header("Location: index.php");
            exit();
        } else {
            $error = "Incorrect password.";
        }
    } else {
        $error = "No account found with that email.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #28243d;
            color: #fff;
        }

        .container {
            text-align: center;
            width: 320px;
            padding: 20px;
            background-color: #3e3a5f;
            border-radius: 8px;
        }

        h2 {
            margin-bottom: 10px;
            color: #fff;
        }

        p {
            margin: 10px 0;
            color: #b5b3c5;
        }

        p a {
            color: #b5a1ff;
            text-decoration: none;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background-color: #4c4967;
            color: #fff;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            background-color: #b5a1ff;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #a387ff;
        }

        .social-login {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        .google-btn, .apple-btn {
            width: 48%;
            padding: 10px;
            background-color: #4c4967;
            color: #000;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .google-btn:hover {
            background-color: #f1f1f1;
        }

        .apple-btn:hover {
            background-color: #f1f1f161;
        }

        img {
            width: 20px;
        }

        .security-question {
            margin-top: 15px;
            text-align: left;
            color: #b5b3c5;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sign In</h2>
        <p>Don’t have an account? <a href="./login.php">Create one</a></p>

        <?php if (isset($error)) { echo "<p style='color: red;'>$error</p>"; } ?>
        
        <form method="POST" action="">
    <input type="email" name="email" placeholder="Email" required>
    <p style="text-align: right;"><a href="./forget_password.php">Forget Password?</a></p>
    <input type="password" name="password" placeholder="Enter your password" required>
    <button type="submit">Sign In</button>

    <!-- <p>Or sign in with</p> -->
    <!-- <div class="social-login">
        <button type="button" class="google-btn"><img src="/assets/resume-template/google.svg" alt="Google icon" />Google</button>
        <button type="button" class="apple-btn"><img src="/assets/resume-template/apple.svg" alt="Apple icon" />Apple</button>
    </div> -->
</form>
    </div>
</body>
</html>
