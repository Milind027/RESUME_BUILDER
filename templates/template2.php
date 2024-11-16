<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive CV</title>
    <!-- Font Awesome CSS for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS file -->
    <!-- <link rel="stylesheet" href="/css/templates/template2.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>   
    <style>
        /* Import Google Fonts */
@import url('http://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Raleway&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Barlow:wght@500&display=swap');

/* Reset default styles and set font family */
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* Set up the body background and layout */
body{
    background-color: lightblue;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: linear-gradient(  #A6BEE4, #799AC5,#688BB5,#436787);
}

/* Style the main container */
.container{
    position: relative;
    width: 100%;
    max-width: 1000px;
    min-height: 1000px;
    background-color: #fff;
    margin: 50px;
    display: grid;
    grid-template-columns: 1fr 2fr;
    box-shadow: 0 35px 55px rgba(0,0,0,0.1);
}

/* Style the left side of the CV */
.container .left-side{
    position: relative;
    background: #003147;
    padding: 40px;
}


/* Style the profile text section */
.profileText{
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-bottom: 20px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}

/* Style the profile image */
.profileText .imgBox{
    position: relative;
    width: 200px;
    height: 200px;
    border-radius: 50%;
    overflow: hidden;
}

.profileText .imgBox .img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    right: 100%;
    object-fit: cover;
}

/* Style the name and job title */
.profileText h2{
    color: #fff;
    font-size: 1.5em;
    margin-top: 20px;
    text-transform: uppercase;
    text-align: center;
    font-weight: 600;
    line-height: 1.4em;
}

.profileText h2 span{
    font-size: 0.8em;
    font-weight: 300;
}

/* Style the contact info section */
.contactInfo
{
    padding-top: 40px;
}

.title{
    color: #fff;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 1px;
    margin-bottom: 20px;
}

.contactInfo ul{
    position: relative;
}

.contactInfo ul li{
    position: relative;
    list-style: none;
    margin: 10px 0;
    cursor: pointer;
}

.contactInfo ul li .icon{
    display: inline-block;
    width: 30px;
    font-size: 18px;
    color: #03a9f4;
}

.container ul li span{
    color: #fff;
    font-weight: 300;
}

/* Style the education section */
.contactInfo.education li{
    margin-bottom: 15px;
}

.contactInfo.education h5{
    color: #03a9f4;
}

.contactInfo.education h4:nth-child(2){
    color: #fff;
    font-weight: 500;   
}

.contactInfo.education h4{
    color: #fff;
    font-weight: 300;
}

/* Style the language section */
.contactInfo.Languages .percent{
    position: relative;
    width: 100%;
    height: 6px;
    background: rgb(4, 7, 24);
    display: block;
    margin: 5px;
}

.contactInfo.Languages .percent div{
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    background: #03a9f4;
}

/* Style the right side of the CV */
.container .right-side{
    position: relative;
    background: #fff;
    padding: 40px;
}

/* Style the about section */
.about{
    margin-bottom: 50px;
}

.about:last-child{
    margin-bottom: 0;
}

.title2{
    color: #003147;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 10px;
}

p{
   color: #333; 
}

/* Style the experience section */
.about .box{
    display: flex;
    flex-direction: row;
    margin: 20px 0;
}

.about .box .year_company{
    min-width: 150px;
}

.about .box .year_company h5{
    text-transform: uppercase;
    color: #848c90;
    font-weight: 600;
}

.about .box .text h4{
    text-transform: uppercase;
    color: #2a7da2;
    font-size: 16px;
}

/* Style the skills section */
.skills .box{
    position: relative;
    width: 100%;
    display: grid;
    grid-template-columns: 150px 1fr;
    justify-content: center;
    align-items: center;
}

.skills .box4 h4{
    text-transform: uppercase;
    color: #848c90;
    font-weight: 500;
}

.skills .box .percent{
    position: relative;
    width: 100%;
    height: 10px;
    background: #f0f0f0;
}

.skills .box .percent div{
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    background: #003147;
}

/* Style the interests section */
.interest ul li{
    color: #333;
    font-weight: 500;
    margin: 10px 0;
}

/* Styles for the action buttons */
.action-buttons {
    position: fixed;
    bottom: 20px;
    right: 20px;
    display: flex;
    gap: 10px;
}

.action-buttons button {
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.action-buttons button:hover {
    background-color: #0056b3;
}

/* Styles for editable content */
[contenteditable="true"]:focus {
    outline: 2px solid #007bff;
    padding: 2px;
}

/* Styles for action buttons at the bottom */
.action-buttons {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.action-buttons button {
    padding: 10px 20px;
    margin: 0 10px;
    font-size: 16px;
    cursor: pointer;
    border: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}


.action-buttons button:hover {
    opacity: 0.8;
}

/* navigation buttons */
.navbtn
{
position: fixed;
top: 40%;
left: 4%;
transform: translate(-40%,-4%);
height: 60px;
width: 60px;
border-radius: 50%;
border:#fff 2px solid;
transition: 300ms ease-in-out;
box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px;
}
.navbtn:nth-child(2)
{
top: 50%;
left: 4.4%;
transform: translate(-50%,-4.4%);
}
.navbtn:nth-child(3)
{
top: 60%;
left: 4.8%;
transform: translate(-60%,-4.8%);
}
.navbtn:hover
{
    background-color: black;
    color: #fff;
    border: #000 2px solid;
    height: 65px;
    width: 65px;
}

@media print {
    .container {
        width: 210mm;
        height: 297mm;
        padding: 0;
        margin: 0;
    }

    .container .left-side,
    .container .right-side {
        padding: 2mm;
    }

    body {
        background: none;
    }

    .navbtn {
        display: none !important;
    }
}

/* Add or update these rules at the end of your try3.css file */

.generating-pdf {
    width: 710mm;
    height: 760mm;
    overflow: inherit;
}

.generating-pdf .container {
    width: 710mm;
    height: 760mm;
    padding: 10mm;
    margin: 0;
    box-sizing: content-box;
    display: flex;
    flex-direction: row;
    overflow: hidden;
    font-size: 9pt;
}

.generating-pdf .container .left-side {
    width: 100%;
    padding: 5mm;
    box-sizing: border-box;
    text-align: justify;
}

.generating-pdf .container .right-side {
    width: 200%;
    padding: 5mm;
    box-sizing: border-box;
    margin-left: 10px;
    text-align:justify;
}

.generating-pdf .profileText .imgBox {
    width: 100px;
    height: 120px;
}

.generating-pdf .title {
    font-size: 30pt;
    margin-bottom: 5mm;
}

.generating-pdf .contactInfo ul li,
.generating-pdf .contactInfo.education li {
    font-size: 22pt;
    margin: 2mm 0;
}

.generating-pdf .title2 {
    margin-top: 10pt;
    font-size: 35pt;
    margin-bottom: 3mm;
}

.generating-pdf .about .box {
    margin: 5mm 0;
}

.generating-pdf .about .box .year_company h5,
.generating-pdf .about .box .text h4,
.generating-pdf p {
    font-size: 20pt;
}

.generating-pdf .skills .box {
    margin-bottom: 3mm;
}

.generating-pdf .skills .box h4 {
    font-size: 20pt;
}

.generating-pdf .interest ul li {
    font-size: 20pt;
    margin: 2mm 0;
}

.generating-pdf .navbtn,
.generating-pdf #downloadBtn {
    display: none !important;
}
    </style>
</head>
<body>
    <!-- Navigation buttons on the left -->
    <div class="nav">
        <button id="cmd" class="navbtn" id="downloadBtn" onclick="window.printpdf()"><i class="fas fa-download"></i></button>
        
        <form>
        <input type="hidden" id="custinfo" name="custinfo">
        <button class="navbtn"><i class="fas fa-save"></i></button>
        </form>
        <button class="navbtn" href="#">
            <a href="#">
                <i class="fas fa-home"></i></button>
            </a>
    </div>
    <!-- Main container for the CV -->
    <div class="container" id="container">
        
        <!-- Left side of the CV -->
        <div class="left-side">
            <!-- Profile section -->
            <div class="profileText">
                <div class="imgBox">
                    <img src="#">
                </div>
                <h2 contenteditable="true">VISHAL PARMAR<br><span>Web Developer</span></h2>
    hygfvhy        </div>
            <!-- Contact information section -->
            <div class="contactInfo">
                <h3 class="title">contact Info</h3>
                <ul>
                    <!-- Phone number -->
                    <li>
                        <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <span class="text" contenteditable="true">+91 123 4567 890</span>
                    </li>
                    <!-- Email -->
                    <li>
                        <span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                        <span class="text" contenteditable="true">visha123@gmail.com</span>
                    </li>
                    <!-- Website -->
                    <li>
                        <span class="icon"><i class="fa fa-globe" aria-hidden="true"></i></span>
                        <span class="text" contenteditable="true"   >www.site.com/me</span>
                    </li>
                    <!-- LinkedIn -->
                    <li>
                        <span class="icon"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                        <span class="text" contenteditable="true">www.linkdin.com/me</span>
                    </li>
                    <!-- Address -->
                    <li>
                        <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <span class="text" contenteditable="true">anand, gujarat, india</span>
                    </li>
                </ul>
            </div>
            <!-- Education section -->
            <div class="contactInfo education">
                <h3 class="title">education</h3>
                <ul>
                    <!-- Education entry 1 -->
                    <li>
                        <h5 contenteditable="true">2025-2026</h5>
                        <h4 contenteditable="true">Bechelor Degree in Computer Eng.</h4>
                        <h4 contenteditable="true">University name</h4>
                    </li>
                    <!-- Education entry 2 -->
                    <li>
                        <h5 contenteditable="true">2020-2021</h5>
                        <h4 contenteditable="true">matriculation</h4>
                        <h4 contenteditable="true">University name</h4>
                    </li>
                </ul>
            </div>
            <!-- Languages section -->
            <div class="contactInfo Languages">
                <h3 class="title">Languages</h3>
                <ul>
                    <!-- Language 1 -->
                    <li>
                        <span class="text" contenteditable="true">English</span>
                        <span class="percent">
                            <div style="width: 65%;" class="percentBar"></div>
                        </span>
                    </li>
                    <!-- Language 2 -->
                    <li>
                        <span class="text" contenteditable="true">Hindi</span>
                        <span class="percent">
                            <div style="width: 85%;" class="percentBar"></div>
                        </span>
                    </li>
                    <!-- Language 3 -->
                    <li>
                        <span class="text" contenteditable="true">Gujarati</span>
                        <span class="percent">
                            <div style="width: 96%;" class="percentBar"></div>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Right side of the CV -->
        <div class="right-side">
            <!-- Profile section -->
            <div class="about">
                <h2 class="title2">Profile</h2>
                <p  contenteditable="true">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint nisi a corrupti odio praesentium explicabo molestiae, nihil quos dolor voluptatum cupiditate eaque nesciunt ex, adipisci illum assumenda commodi doloremque excepturi.<br><br>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus cupiditate voluptatibus libero incidunt, cum quidem magnam illum, eius corporis, debitis numquam adipisci ipsa veritatis aliquam ad deserunt sed doloremque rem!</p>
            </div>
            <!-- Experience section -->
            <div class="about">
                <h2 class="title2">Experience</h2>
                <!-- Experience entry 1 -->
                <div class="box">
                    <div class="year_company">
                        <h5 contenteditable="true">2023 - present</h5>
                        <h5 contenteditable="true">Company Name</h5>
                    </div>
                    <div class="text">
                        <h4 contenteditable="true">junior UX Designer</h4>
                        <p contenteditable="true">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse illo assumenda sunt adipisci voluptas ab odio, consequuntur sequi quo velit! Sint odio velit quia est. Architecto sed beatae vitae magnam!</p>
                    </div>
                </div>
                <!-- Experience entry 2 -->
                <div class="box">
                    <div class="year_company">
                        <h5 contenteditable="true">2019 - 2023</h5>
                        <h5 contenteditable="true">Company Name</h5>
                    </div>
                    <div class="text">
                        <h4 contenteditable="true">Senior UX Designer</h4>
                        <p contenteditable="true">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse illo assumenda sunt adipisci voluptas ab odio, consequuntur sequi quo velit! Sint odio velit quia est. Architecto sed beatae vitae magnam!</p>
                    </div>
                </div>
            </div>
            <!-- Professional Skills section -->
            <div class="about skills">
                <h2 class="title2">Professional Skills</h2>
                <!-- Skill 1 -->
                <div class="box">
                    <h4 contenteditable="true">Html</h4>
                    <div class="percent">
                        <div style="width: 90%;" class="percentBar"></div>
                    </div>
                </div>
                <!-- Skill 2 -->
                <div class="box">
                    <h4 contenteditable="true">css</h4>
                    <div class="percent">
                        <div style="width: 85%;" class="percentBar"></div>
                    </div>
                </div>
                <!-- Skill 3 -->
                <div class="box">
                    <h4 contenteditable="true">javascript</h4>
                    <div class="percent">
                        <div style="width: 82%;" class="percentBar"></div>
                    </div>
                </div>
                <!-- Skill 4 -->
                <div class="box">
                    <h4 contenteditable="true">photoshop</h4>
                    <div class="percent">
                        <div style="width: 70%;" class="percentBar"></div>
                    </div>
                </div>
                <!-- Interests section -->
                <div class="about interest">
                    <h2 class="title2">Interest</h2>
                    <ul>
                        <li contenteditable="true">Gaming</li>
                        <li contenteditable="true">Reading</li>
                        <li contenteditable="true">movie watching</li>
                        <li contenteditable="true">cricket</li>    
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Link to JavaScript file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script >
        document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM content loaded');
    
    // Make content editable
   

    // Set up event listeners for buttons
    setupButtonListeners();

    // Set up event listeners for skill and language bars
    setupBarListeners();
});




function setupButtonListeners() {
    const saveBtn = document.querySelector('.navbtn:nth-child(2)');
    if (saveBtn) {
        saveBtn.addEventListener('click', saveResume);
    } else {
        console.error('Save button not found');
    }

    const homeBtn = document.querySelector('.navbtn:nth-child(3)');
    if (homeBtn) {
        homeBtn.addEventListener('click', goHome);
    } else {
        console.error('Home button not found');
    }

    const downloadBtn = document.getElementById('downloadBtn');
    if (downloadBtn) {
        downloadBtn.addEventListener('click', printpdf);
    } else {
        console.error('Download button not found');
    }
}

function setupBarListeners() {
    const bars = document.querySelectorAll('.percent div');
    bars.forEach(bar => {
        bar.addEventListener('click', function(e) {
            e.stopPropagation();
            changeBarLevel(this);
        });
    });
}

function changeBarLevel(bar) {
    const currentWidth = parseInt(bar.style.width) || 0;
    const newLevel = prompt(`Enter new level (0-100). Current level: ${currentWidth}%`);
    
    if (newLevel !== null && !isNaN(newLevel)) {
        const level = Math.min(100, Math.max(0, parseInt(newLevel)));
        bar.style.width = `${level}%`;
    }
}

function printpdf() {
    console.log('printpdf function called');
    const element = document.querySelector('.container');
    if (!element) {
        console.error('Container element not found');
        return;
    }

    // Hide navigation buttons before generating PDF
    const navButtons = document.querySelectorAll('.navbtn');
    navButtons.forEach(btn => btn.style.display = 'none');

    // Add a class to the body for PDF-specific styles
    document.body.classList.add('generating-pdf');

    // Set up PDF options
    const opt = {
        margin: 0,
        filename: 'resume.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { 
            scale: 2, 
            useCORS: true,
            logging: true,
            letterRendering: true,
            width: 1500, // A4 width in pixels at 96 DPI
            height: 2000, // A4 height in pixels at 96 DPI
            windowWidth: 1500,
            windowHeight: 2000
            
        },
        jsPDF: { unit: 'pt', format: 'a4', orientation: 'portrait' }
    };

    // Generate PDF
    html2pdf().set(opt).from(element).save().then(() => {
        console.log('PDF generated and saved');
        // Show navigation buttons after generating PDF
        navButtons.forEach(btn => btn.style.display = '');
        // Remove the PDF-specific class
        document.body.classList.remove('generating-pdf');
    }).catch(error => {
        console.error('Error generating PDF:', error);
        // Show navigation buttons if there's an error
        navButtons.forEach(btn => btn.style.display = '');
        // Remove the PDF-specific class
        document.body.classList.remove('generating-pdf');
    });
}

function saveResume(event) {
    event.preventDefault();
    const resumeContent = document.querySelector('.container').innerHTML;
    document.getElementById('custinfo').value = resumeContent;
    // You can add AJAX call here to save the resume content to a server
    alert('Resume saved successfully!');
}

function goHome() {
    // Replace with the actual home page URL
    window.location.href = 'index.html';
}
    </script>
</body>
</html>