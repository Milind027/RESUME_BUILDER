<?php
session_start();
include('connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $security_question = mysqli_real_escape_string($conn, $_POST['security_question']);
    $security_answer = mysqli_real_escape_string($conn, $_POST['security_answer']);

    // Check if email is already registered
    $check_query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($result) > 0) {
        echo "Email is already registered.";
    } else {
        // Insert the new user into the database
        $query = "INSERT INTO users (first_name, last_name, email, password, security_question, security_answer) 
                  VALUES ('$first_name', '$last_name', '$email', '$password', '$security_question', '$security_answer')";
        
        if (mysqli_query($conn, $query)) {
            echo "Account created successfully!";
            header("Location: signin.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- <link rel="stylesheet" href="./css/login.css"> -->
    <style>* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html,
body {
    height: 100%;
    width: 100%;
    font-family: Poppins, sans-serif;
    background-color: var(--bg-color);

}

html {
    scroll-behavior: smooth;
}

:root {
    --bg-color: #2B2738;
    --font-color: #FEFCFC;
    --input-bg-color: #3B364C;
    --cr-ac-bg-color: #6E54B5;
    --border-color: #757082;
}

.main {
    width: 100%;
    height: 100vh;
    background-color: var(--bg-color);
    display: flex;
    align-items: center;
    justify-content: center;
    padding-left: 133px;
}

/* left side  */

.left {
    width: 40%;
    height: 90vh;
    border-radius: 14px;
    /* background-color: red; */
}

.slider-container {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
    border-radius: 10px;
}

.slider {
    display: flex;
    height: 100%;
    transition: transform 0.5s ease-in-out;
}

.slide {
    min-width: 100%;
    background-size: cover;
    background-position: center;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 20px;
    box-sizing: border-box;
    color: white;
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 24px;
    font-weight: bold;
}

.back-button {
    background-color: rgba(255, 255, 255, 0.2);
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 20px;
    cursor: pointer;
}

.content {
    text-align: center;
    margin-bottom: 40px;
}

.content h2 {
    font-size: 32px;
    margin-bottom: 10px;
}

.indicators {
    display: flex;
    justify-content: center;
    gap: 10px;
}

.indicator {
    width: 30px;
    height: 3px;
    background-color: rgba(255, 255, 255, 0.5);
    cursor: pointer;
}

.indicator.active {
    background-color: white;
}


/* right side */
.right {
    width: 40%;
    height: 90vh;
    border-radius: 14px;
}

.form-container {
    width: 100%;
    height: 100%;
    padding: 40px;

}

.form-container h1 {
    color: var(--font-color);

}

.form-container p {
    padding: 20px 0;
    color: rgb(202, 197, 197);
}

.form-container a {
    color: #6E54B5;
}

input {
    width: 100%;
    height: 40px;
    padding: 10px;
    margin: 10px 0;
    background-color: var(--input-bg-color);
    border: none;
    border-radius: 5px;

}

input[type=text]:focus {
    outline-color: var(--border-color);
}

input[type=email]:focus {
    outline-color: var(--border-color);
}

input[type=password]:focus {
    outline-color: var(--border-color);
}

.input-f-l {
    display: flex;
    flex-direction: row;
    width: 65%;
    gap: 10px;
    padding-top: 15px;
}

.input-e-p input {
    color: #FEFCFC;
}

.input-f-l input {
    color: #FEFCFC;
}

.input-e-p {
    display: flex;
    flex-direction: column;
    width: 65%;
}

#checkbox {
    width: 18px;
    height: 16px;
}

.terms-condition {
    display: flex;
    gap: 10px;
    flex-direction: row;
    align-items: center;
}

.terms-condition p {
    color: var(--font-color);

}

.terms-condition a {
    color: #6E54B5;

}

.create-ac {
    width: 100%;
}

.create-ac button {
    width: 100%;
    height: 40px;
    background-color: var(--cr-ac-bg-color);
    border: none;
    border-radius: 5px;
    color: var(--font-color);
    font-weight: 600;

}

.create-ac button {
    display: inline-block;
    transition: all 0.2s ease-in;
    position: relative;
    overflow: hidden;
    z-index: 1;
    color: #090909;
    padding: 0.7em 1.7em;
    cursor: pointer;
    font-size: 17px;
    border-radius: 0.5em;
    background: var(--font-color);
    border: 1px solid #e8e8e8;
}

.create-ac button:active {
    color: #666;
    box-shadow: inset 4px 4px 12px #c5c5c5, inset -4px -4px 12px #ffffff;
}

.create-ac button:before {
    content: "";
    position: absolute;
    left: 50%;
    transform: translateX(-50%) scaleY(1) scaleX(1.25);
    top: 100%;
    width: 140%;
    height: 180%;
    background-color: rgba(0, 0, 0, 0.05);
    border-radius: 50%;
    display: block;
    transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
    z-index: -1;
}

.create-ac button:after {
    content: "";
    position: absolute;
    left: 55%;
    transform: translateX(-50%) scaleY(1) scaleX(1.45);
    top: 180%;
    width: 160%;
    height: 190%;
    background-color: #009087;
    border-radius: 50%;
    display: block;
    transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
    z-index: -1;
}

.create-ac button:hover {
    color: #ffffff;
    border: 1px solid #6E54B5;
}

.create-ac button:hover:before {
    top: -35%;
    background-color: #6E54B5;
    transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
}

.create-ac button:hover:after {
    top: -45%;
    background-color: #6E54B5;
    transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
}

.or-reg-with {
    padding: 20px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;

}

hr {
    width: 90px;
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid rgba(202, 197, 197, 0.434);
    margin: 1em 0;
    padding: 0;
}

.or-reg-with span {
    color: rgba(202, 197, 197, 0.434);
}

.GA {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.GA button {
    padding: 10px 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    font-size: 17px;
    background-color: var(--bg-color);
    border: none;
    border: 1px solid lightgray;
    border-radius: 5px;
    color: var(--font-color);

}

.GA button img {
    width: 20px;
    height: 18px;

}</style>
  </head>
  <body>
    <div class="main">
      <div class="left">
        
    <div class="slider-container">
      <div class="slider">
          <div class="slide" style="background-image: url('https://plus.unsplash.com/premium_photo-1683531060766-c460adea7010?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fHJlc3VtZXxlbnwwfHwwfHx8MA%3D%3D');">
              <div class="header">
                  <div class="logo">AMU</div>
                  <a href="/index.php">
                    <button class="back-button">Back to website →</button>
                  </a>
              </div>
              <div class="content">
                  <h2>Capturing Moments,<br>Creating Memories</h2>
              </div>
              <div class="indicators">
                  <div class="indicator"></div>
                  <div class="indicator"></div>
                  <div class="indicator active"></div>
              </div>
          </div>
          <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1602407294553-6ac9170b3ed0?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fHJlc3VtZXxlbnwwfHwwfHx8MA%3D%3D');">
              <div class="header">
                  <div class="logo">AMU</div>s
                  <button class="back-button" >Back to website →</button>
              </div>
              <div class="content">
                  <h2>Explore the World<br>Through Our Lens</h2>
              </div>
              <div class="indicators">
                  <div class="indicator"></div>
                  <div class="indicator active"></div>
                  <div class="indicator"></div>
              </div>
          </div>
          <div class="slide" style="background-image: url('https://media.istockphoto.com/id/1359108560/photo/resumes-on-laptop-with-glasses-resume-review-job-interview.webp?a=1&b=1&s=612x612&w=0&k=20&c=kmXx8hMjcs31dHSFJ2LFobGbBA5Ru_5Ws4oSC_T2DHs=');">
              <div class="header">
                  <div class="logo">AMU</div>
                  <button class="back-button">Back to website →</button>
              </div>
              <div class="content">
                  <h2>Unforgettable Adventures<br>Await You</h2>
              </div>
              <div class="indicators">
                  <div class="indicator active"></div>
                  <div class="indicator"></div>
                  <div class="indicator"></div>
              </div>
          </div>
      </div>
  </div>


      </div>
      <div class="right">
            <div class="form-container">
                <h1>Create an account</h1>
                <p>
                    Already have an account?&nbsp;
                    <span><a href="./signin.php">Sign in</a></span>
                </p>
                <form method="POST" action="">
                    <div class="input-f-l">
                        <input type="text" name="first_name" placeholder="First name" required />
                        <input type="text" name="last_name" placeholder="Last name" required />
                    </div>
                    <div class="input-e-p">
                        <input type="email" name="email" placeholder="Email" required />
                        <input type="password" name="password" placeholder="Enter your password" required />
                        <div class="security-question">
                            <label for="security-question">Security Question:</label>
                            <select id="security-question" name="security_question" required>
                                <option value="" disabled selected>Select a question</option>
                                <option value="pet">What is your pet's name?</option>
                                <option value="school">What was the name of your first school?</option>
                                <option value="city">In what city were you born?</option>
                            </select>
                            <input type="text" name="security_answer" id="security-answer" placeholder="Answer" required>
                        </div>
                        <div class="terms-condition">
                            <input type="checkbox" name="terms" id="checkbox" required />
                            <p>I agree to the <a href="#">Terms & Conditions</a></p>
                        </div>
                        <div class="create-ac">
                            <button type="submit" value="Create account">Create account</button>
                        </div>
                    </div>
                </form>

                <!-- <div class="or-reg-with">
                    <hr />
                    <span>Or register with</span>
                    <hr />
                </div>
                <div class="GA">
                    <button type="button">
                        <img src="./assets/resume-template/google.svg" alt="" /> Google
                    </button>
                    <button type="button">
                        <img src="./assets/resume-template/apple.svg" alt="" /> Apple
                    </button> -->
                </div>
            </div>
        </div>
    </div>
    
    <script>
      const slider = document.querySelector('.slider');
const slides = document.querySelectorAll('.slide');
const indicators = document.querySelectorAll('.indicator');
let currentIndex = 0;

function updateSlider() {
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    indicators.forEach((indicator, index) => {
        indicator.classList.toggle('active', index === currentIndex);
    });
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    updateSlider();
}

indicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
        currentIndex = index;
        updateSlider();
    });
});

// Auto-advance slides every 5 seconds
setInterval(nextSlide, 5000);

    </script>
  </body>
</html>