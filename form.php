

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="./form.css"> -->
     <style>
     body {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-image: linear-gradient(to right,#688BB5, #799AC5, #A6BEE4)
}

.container {
    position: relative;
    max-width: 900px;
    width: 100%;
    border-radius: 6px;
    padding: 30px;
    margin: 0 15px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    
}

.container header {
    position: relative;
    text-align: center;
    font-size: 29px;
    font-weight: 600;
    color: white;
}

.container form {
    position: relative;
    min-height: px;
    text-align: center;
    background-color: rgb(255, 255, 255);
    margin-top: 16px;
    padding: 8px;
    justify-content: left;
    border-radius: 6px;
}

.container form .details {
    margin-top: 10px;
}

.title {
    background-color: deepskyblue;
    font-size: 24px; /* Increase the font size */
    font-weight: 700; /* Make the text bold */
    text-align: center;
    color: #333; /* Darker color for contrast */
    margin-bottom: 50px; /* Add more space below the title */
    background-color: #5143c0; /* Change this to any color you prefer */
    color: white;              /* Text color */
    padding: 10px 20px;        /* Padding around the text */
    border-radius: 5px;        /* Rounded corners */
    font-size: 1.2rem;         /* Font size */
    display: flex;     /* Ensure background doesn't stretch full width */
    margin-bottom: 10px;       /* Space below the title */
    justify-content: center;
}


.feilds {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* Create 3 equal-width columns */
    gap: 20px; /* Space between columns */
    width: 100%;
}

/* Form group styling */
.input-feilds {
    flex: 1; /* Flex-grow: take up available space */
    min-width: 250px; /* Minimum width for each input field */
    display: flex; /* Flexbox for arranging label and input */
    flex-direction: column; /* Stack label and input vertically */
    margin-bottom: 15px; /* Space below each input field */
}


/* Label and input styling */
label {
    
    margin-bottom: 5px;
    text-align: left; /* Left-align the label */
   
}

input[type="text"],
input[type="number"],
input[type="email"],
input[type="file"],
input[type="submit"] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
    box-sizing: border-box;
}

/* Ensure the file input and submit button are inside the same box */
.image-submit {
    display: flex;
    flex-direction: column;
    width: 100%;
}

/* Submit button style */
input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
    border: none;
    margin-top: 10px;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
/* buttons */
.button-container {
    display: flex;
    justify-content: space-between; /* Space between the two buttons */
    margin-top: 20px; /* Adds space above the buttons */
}

.remove-btn {
    margin-left: auto; /* Push the remove button to the right */
    background-color: #f44336; /* Optional: red background */
    color: white; /* White text color */
    padding: 10px 20px; /* Adds some padding for better look */
    border: none;
    cursor: pointer;
    border-radius: 6px;
}
.remove-btn:hover{
    background-color: #b8655f;
}

.add-btn {
    background-color: #4CAF50; /* Optional: green background */
    color: white; /* White text color */
    padding: 10px 20px; /* Adds some padding for better look */
    border: none;
    cursor: pointer;
    border-radius: 6px;
}
.add-btn:hover{
    background-color: #1a5b62;
}


/* Responsive Design */
@media (max-width: 768px) {
    .feilds {
        grid-template-columns: 1fr; /* Stack all fields vertically on smaller screens */
    }

    .input-feilds {
        flex-direction: column; /* Stack inputs vertically on small screens */
    }
}
/* Center the submit button */
.form .details .feilds {
    display: flex;
    justify-content: center; /* Centers the button horizontally */
    align-items: center;     /* Centers the button vertically (optional if needed) */
    margin-top: 20px;
    
}
.add-btn{
    border-radius: 6px;
}


</style>
</head>
<body>
    <div class="container">
        <header>Registration</header>
        <form action="submit_form.php" method="post" enctype="multipart/form-data">
    <!-- About Section -->
    <div class="form first">
        <div class="details">
            <span class="title">About Section</span>
            <div class="feilds">
                <div class="input-feilds">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" placeholder="i.e jhon" required>
                    
                    <label for="image">Your Image</label>
                    <input type="file" id="myFile" name="image">
                    
                    <label for="email">E-mail</label>
                    <input type="email" name="email" placeholder="i.e. ramesh123@gmail.com" required>
                </div>
                <div class="input-feilds">
                    <label for="middle_name">Middle Name (optional)</label>
                    <input type="text" name="middle_name" placeholder="i.e ramesh">
                    
                    <label for="designation">Designation</label>
                    <input type="text" name="designation" placeholder="Senior Manager" required>
                    
                    <label for="phone_number">Phone Number</label>
                    <input type="number" name="phone_number" required>
                </div>
                <div class="input-feilds">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" placeholder="rathva" required>
                    
                    <label for="address">Address</label>
                    <input type="text" name="address" placeholder="#" required>
                    
                    <label for="summary">Summary</label>
                    <input type="text" name="summary" placeholder="write about you">
                </div>
            </div>
        </div>
    </div>

    <!-- Achievements Section -->
    <div class="form first">
        <div class="details">
            <span class="title">Achievements</span>
            <div id="achievements-container">
                <div class="achievement-item" data-original="true">
                    <div class="feilds">
                        <div class="input-feilds">
                            <label for="achievement_title_1">Title</label>
                            <input type="text" name="achievements[0][title]" placeholder="HR" required>
                        </div>
                        <div class="input-feilds">
                            <label for="achievement_description_1">Description</label>
                            <input type="text" name="achievements[0][description]" placeholder="HR">
                        </div>
                    </div>
                    <div class="button-container">
                        <button type="button" class="add-btn" onclick="addAchievement()">Add Achievement</button>
                        <button type="button" class="remove-btn" onclick="removeSection(this)" disabled>Remove</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Experiences Section -->
    <div class="form first">
        <div class="details">
            <span class="title">Experiences</span>
            <div id="experience-container">
                <div class="experience-item" data-original="true">
                    <div class="feilds">
                        <div class="input-feilds">
                            <label for="experience_title_1">Title</label>
                            <input type="text" name="experiences[0][title]" placeholder="#" required>
                            <label for="experience_start_date_1">Start Date</label>
                            <input type="date" name="experiences[0][start_date]" placeholder="mm/dd/yyyy" required>
                        </div>
                        <div class="input-feilds">
                            <label for="experience_company_1">Company/Organization</label>
                            <input type="text" name="experiences[0][company]" placeholder="Company">
                            <label for="experience_end_date_1">End Date</label>
                            <input type="date" name="experiences[0][end_date]" placeholder="mm/dd/yyyy" required>
                        </div>
                        <div class="input-feilds">
                            <label for="experience_location_1">Location</label>
                            <input type="text" name="experiences[0][location]" placeholder="Location" required>
                            <label for="experience_description_1">Description</label>
                            <input type="text" name="experiences[0][description]" placeholder="Description" required>
                        </div>
                    </div>
                    <div class="button-container">
                        <button type="button" class="add-btn" onclick="addExperience()">Add Experience</button>
                        <button type="button" class="remove-btn" onclick="removeSection(this)" disabled>Remove</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Education Section -->
    <div class="form first">
        <div class="details">
            <span class="title">Education</span>
            <div id="education-container">
                <div class="education-item" data-original="true">
                    <div class="feilds">
                        <div class="input-feilds">
                            <label for="education_school_1">School</label>
                            <input type="text" name="education[0][school]" placeholder="#" required>
                            <label for="education_start_date_1">Start Date</label>
                            <input type="date" name="education[0][start_date]" placeholder="mm/dd/yyyy" required>
                        </div>
                        <div class="input-feilds">
                            <label for="education_degree_1">Degree</label>
                            <input type="text" name="education[0][degree]" placeholder="Degree">
                            <label for="education_end_date_1">End Date</label>
                            <input type="date" name="education[0][end_date]" placeholder="mm/dd/yyyy" required>
                        </div>
                        <div class="input-feilds">
                            <label for="education_city_1">City</label>
                            <input type="text" name="education[0][city]" placeholder="City" required>
                            <label for="education_description_1">Description</label>
                            <input type="text" name="education[0][description]" placeholder="Description" required>
                        </div>
                    </div>
                    <div class="button-container">
                        <button type="button" class="add-btn" onclick="addEducation()">Add Education</button>
                        <button type="button" class="remove-btn" onclick="removeSection(this)" disabled>Remove</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Projects Section -->
    <div class="form first">
        <div class="details">
            <span class="title">Projects</span>
            <div id="projects-container">
                <div class="project-item" data-original="true">
                    <div class="feilds">
                        <div class="input-feilds">
                            <label for="project_name_1">Project Name</label>
                            <input type="text" name="projects[0][project_name]" placeholder="Project Name" required>
                        </div>
                        <div class="input-feilds">
                            <label for="project_link_1">Project Link</label>
                            <input type="text" name="projects[0][project_link]" placeholder="Project Link">
                        </div>
                        <div class="input-feilds">
                            <label for="project_description_1">Description</label>
                            <input type="text" name="projects[0][description]" placeholder="Description" required>
                        </div>
                    </div>
                    <div class="button-container">
                        <button type="button" class="add-btn" onclick="addProject()">Add Project</button>
                        <button type="button" class="remove-btn" onclick="removeSection(this)" disabled>Remove</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Submit Button Section -->
    <div class="form first">
        <div class="details">
            <div class="feilds">
                <div class="input-feilds">
                    <button type="submit" class="add-btn">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>

    </div> 

    <script>
        // Function to clone and add an achievement section
        function addAchievement() {
            const container = document.getElementById('achievements-container');
            const template = container.querySelector('.achievement-item').cloneNode(true);
            template.removeAttribute('data-original');
            template.querySelector('.remove-btn').disabled = false;
            container.appendChild(template);
        }

        // Function to clone and add an experience section
        function addExperience() {
            const container = document.getElementById('experience-container');
            const template = container.querySelector('.experience-item').cloneNode(true);
            template.removeAttribute('data-original');
            template.querySelector('.remove-btn').disabled = false;
            container.appendChild(template);
        }

        // Function to clone and add an education section
        function addEducation() {
            const container = document.getElementById('education-container');
            const template = container.querySelector('.education-item').cloneNode(true);
            template.removeAttribute('data-original');
            template.querySelector('.remove-btn').disabled = false;
            container.appendChild(template);
        }

        // Function to clone and add a project section
        function addProject() {
            const container = document.getElementById('projects-container');
            const template = container.querySelector('.project-item').cloneNode(true);
            template.removeAttribute('data-original');
            template.querySelector('.remove-btn').disabled = false;
            container.appendChild(template);
        }

        // Function to remove a section, only if it is not the original
        function removeSection(button) {
             const section = button.closest('.achievement-item, .experience-item, .education-item, .project-item');
             if (!section.hasAttribute('data-original')) {
                 section.remove(); // Remove the entire cloned section
            }
        }
    </script>
</body>
</html>
