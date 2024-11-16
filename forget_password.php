<?php
session_start();
include('connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $security_question = mysqli_real_escape_string($conn, $_POST['security_question']);
    $security_answer = mysqli_real_escape_string($conn, $_POST['security_answer']);

    // Check if the provided information matches
    $query = "SELECT * FROM users WHERE email='$email' AND security_question='$security_question' AND security_answer='$security_answer'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['reset_email'] = $email;
        header("Location: reset_password.php");
        exit();
    } else {
        echo "Incorrect information. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
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

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

input[type="email"], select, input[type="text"] {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: none;
    border-radius: 5px;
    background-color: #4c4967;
    color: #fff;
}

select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-image: url('data:image/svg+xml;utf8,<svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path d="M7 10l5 5 5-5z"/></svg>');
    background-repeat: no-repeat;
    background-position: right 10px center;
    background-size: 12px;
    padding-right: 30px;
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
    <h2>Forgot Password</h2>
        <input type="email" name="email" placeholder="Enter your email" required>
        <select name="security_question" required>
            <option value="" disabled selected>Select your security question</option>
            <option value="pet">What is your pet's name?</option>
            <option value="school">What was the name of your first school?</option>
            <option value="city">In what city were you born?</option>
        </select>
        <input type="text" name="security_answer" placeholder="Answer" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
