<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form_html";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // User details
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $summary = $_POST['summary'];
    $designation = $_POST['designation'];

    // Image handling
    $image_path = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image_path = 'uploads/' . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $image_path);
    }

    // Insert user details
    $sql = "INSERT INTO user_details (first_name, middle_name, last_name, email, phone_number, address, summary, image_path, designation) 
            VALUES ('$first_name', '$middle_name', '$last_name', '$email', '$phone_number', '$address', '$summary', '$image_path', '$designation')";
    
    if ($conn->query($sql) === TRUE) {
        $user_id = $conn->insert_id; // Get last inserted user ID

        // Insert achievements
        if (isset($_POST['achievements'])) {
            foreach ($_POST['achievements'] as $achievement) {
                $title = $achievement['title'];
                $description = $achievement['description'];
                $conn->query("INSERT INTO achievements (user_id, title, description) VALUES ('$user_id', '$title', '$description')");
            }
        }

        // Insert experiences
        if (isset($_POST['experiences'])) {
            foreach ($_POST['experiences'] as $experience) {
                $title = $experience['title'];
                $company = $experience['company'];
                $start_date = $experience['start_date'];
                $end_date = $experience['end_date'];
                $location = $experience['location'];
                $description = $experience['description'];
                $conn->query("INSERT INTO experiences (user_id, title, company, start_date, end_date, location, description) 
                              VALUES ('$user_id', '$title', '$company', '$start_date', '$end_date', '$location', '$description')");
            }
        }

        // Insert education
        if (isset($_POST['education'])) {
            foreach ($_POST['education'] as $education) {
                $school = $education['school'];
                $degree = $education['degree'];
                $start_date = $education['start_date'];
                $end_date = $education['end_date'];
                $city = $education['city'];
                $description = $education['description'];
                $conn->query("INSERT INTO education (user_id, school, degree, start_date, end_date, city, description) 
                              VALUES ('$user_id', '$school', '$degree', '$start_date', '$end_date', '$city', '$description')");
            }
        }

        // Insert projects
        if (isset($_POST['projects'])) {
            foreach ($_POST['projects'] as $project) {
                $project_name = $project['project_name'];
                $project_link = $project['project_link'];
                $description = $project['description'];
                $conn->query("INSERT INTO projects (user_id, project_name, project_link, description) 
                              VALUES ('$user_id', '$project_name', '$project_link', '$description')");
            }
        }

        echo "Form submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
