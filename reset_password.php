<?php
session_start();
include('connect.php');

if (!isset($_SESSION['reset_email'])) {
    header("Location: forget_password.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    if ($new_password === $confirm_password) {
        $hashed_password = password_hash($new_password, PASSWORD_BCRYPT);
        $email = $_SESSION['reset_email'];

        $query = "UPDATE users SET password='$hashed_password' WHERE email='$email'";
        if (mysqli_query($conn, $query)) {
            echo "Password reset successfully!";
            unset($_SESSION['reset_email']);
            header("Location: signin.php");
            exit();
        } else {
            echo "Error updating password.";
        }
    } else {
        echo "Passwords do not match.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <style>
        /* Add basic styling here for simplicity */
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

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

input[type="password"] {
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

p {
    margin: 10px 0;
    color: #b5b3c5;
}

p a {
    color: #b5a1ff;
    text-decoration: none;
}

p a:hover {
    color: #a387ff;
}

    </style>
</head>
<body>
    <form method="POST" action="">
    <h2>Reset Password</h2>
        <input type="password" name="new_password" placeholder="New Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm New Password" required>
        <button type="submit">Reset Password</button>
    </form>
</body>
</html>
