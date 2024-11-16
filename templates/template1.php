<html></html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Resume/CV Builder</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <!-- <link rel="stylesheet" href="/css/templates/template1.css"> -->
         <style>
            @import url('https://fonts.googleapis.com/css2?family=Raleway&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Barlow:wght@500&display=swap');

* {
    margin: 0%;
    padding: 0%;
    font-weight: 500;
    font-size: 14px;
}

body {
    background: linear-gradient(135deg, #E3E3E3 0%, #9a9a9a 100%);
    display: grid;
    place-items: center;
    font-weight: 450;
    opacity: 1;
    background-image: linear-gradient(  #A6BEE4, #799AC5,#688BB5,#436787);
}
    
.none {
    display: none;
}

.resume {
    /* margin-top: 5px; */
    width: 800px;
    box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px;
}

#print {
    background-color: #fff;
    padding: 30px 50px;
    height: 1000px;
    margin: 0;

}

.head {
    display: grid;
    grid-template-columns: 3fr 1.5fr;
}

.head .main .name {
    font-size: 55px;
    font-family: 'Raleway', sans-serif;
}

.head .main span:nth-child(2) {
    color: rgb(100, 100, 100);
    font-size: 55px;
    font-family: 'Raleway', sans-serif;
    margin-left: 5px;
}

.head .main .post {
    font-family: 'Barlow', sans-serif;
}

.head .contacts {
    text-align: right;
    padding-top: 7px;
}

.head .contacts .content {
    font-weight: 500;
    padding-right: 5px;
}

.head .contacts .symbol {
    margin-right: 5px;
    font-size: 15px;
    width: 17px;
    height: 17px;
}

.line {
    height: 0.5px;
    background-color: rgb(87, 87, 87);
    margin: 25px 0;
    margin-bottom: 50px;
}

.mainbody {
    display: grid;
    grid-template-columns: 10fr 1fr 17fr;
    height: 775px;
    /* background: red; */
}

.mainbody .border {
    background-color: rgb(87, 87, 87);
    width: 3px;
    opacity: 2;
    height: 700px;
}

.leftside {
    height: 700px;

}

.mainbody .rightside {
    padding-left: 15px;
    /* background: red; */
    height: 700px;
}

.title {
    font-weight: 700;
    font-size: 18px;
    border: none;
    padding-bottom: 3px;
    border-bottom: 2px greenyellow solid;
}

.skill {
    margin-bottom: 6px;
}

button {
    margin: 15px 0;
}

.language {
    margin-bottom: 6px;
}

.language span:nth-child(odd) {
    font-weight: 700;
}

.edublock {
    margin-bottom: 10px;
}

.edublock .head {
    font-weight: 700;
    font-size: 17px;
}

.navbtn {
    position: fixed;
    top: 40%;
    left: 4%;
    transform: translate(-40%, -4%);
    height: 60px;
    width: 60px;
    border-radius: 50%;
    border: #fff 2px solid;
    transition: 300ms ease-in-out;
    box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px;
}

.navbtn:nth-child(2) {
    top: 50%;
    left: 4.4%;
    transform: translate(-50%, -4.4%);
}

.navbtn:nth-child(3) {
    top: 60%;
    left: 4.8%;
    transform: translate(-60%, -4.8%);
}

.navbtn:hover {
    background-color: black;
    color: #fff;
    border: #000 2px solid;
    height: 65px;
    width: 65px;
}

.input-checkbox {
    margin-right: 10px;
}

.education-head {
    font-weight: 700;
    font-size: 17px;
}


@media print {
    body {
        margin: 0;
        padding: 0;
        width: 100%;
    }
}

@media print {

    body,
    .resume,
    #print {
        margin: 0;
        padding: 0;
        width: 100%;
    }
}

@media print {
    body {
        page-break-after: avoid;
        page-break-before: avoid;
        page-break-inside: avoid;
    }

    .resume,
    #print {
        page-break-after: auto;
        page-break-before: auto;
        page-break-inside: avoid;
    }
}
         </style>
    </head>
    <body>
    <div class="nav">
    <button id="cmd" onclick="printpdf()" class="navbtn"><i class="fas fa-download"></i></button>
    <form>
    <input type="hidden" id="custinfo" name="custinfo">
    <button class="navbtn"><i class="fas fa-save"></i></button>
    </form>
    <button class="navbtn" href="./index.php">
        <a href="./index.php">
            <i class="fas fa-home"></i></button>
        </a>
    </div>

    <div class="resume" id="resume">
        <section id="print">
             <div class="head">
                <div class="main">
                    <span class="name" contenteditable="true">YOUR</span> <span contenteditable="true">NAME</span>
                    <div class="post" contenteditable="true">YOUR JOB PROFILE</div>
                </div>
                <div class="contacts">
                <span contenteditable="true" class="content">231-3212-2132</span><span class="symbol"> <i class="fas fa-phone"></i></span><br>
                <span contenteditable="true" class="content">samplemail@email.in</span><span class="symbol"> <i class="fas fa-envelope"></i></span><br>
                <span contenteditable="true" class="content">linkedin/username.com</span><span class="symbol"> <i class="fab fa-linkedin"></i></span><br>
                <span contenteditable="true" class="content">sample street-India</span><span class="symbol"> <i class="fas fa-map-marker-alt"></i></i></span>
                </div>
            </div>

            <div class="line"></div>
            <div class="mainbody">
                <div class="leftside">
                <span class="title">MY SKILLS</span><br><br><div>
                <div class="skill"><span><input type="checkbox" class="input-checkbox"></span><span><i class="fas fa-chevron-circle-right"></i></span>   <span contenteditable="true">write your skill here</span></div>
                <div id="skills"></div>
                <button id="skilladd" type="button" class="btn btn-success" onclick="addskill()"><i class="fas fa-plus-circle"></i> Skill</button>
                <button id="skillrem" type="button" class="btn btn-danger" onclick="remskill(event)"><i class="fas fa-minus-circle"></i> Skill</button></div>
                <br><br><span class="title">LANGUAGES</span><br><br><div>
                <div class="language"><span><input type="checkbox" class="input-checkbox"></span><span contenteditable="true">LANGNAME</span> - <span contenteditable="true">level u know</span></div>
                <div id="languages"></div>
                <button id="langadd" type="button" class="btn btn-success" onclick="addLang()"><i class="fas fa-plus-circle"></i> Language</button>

                <button id="langrem" type="button" class="btn btn-danger" onclick="remLang(event)"><i class="fas fa-minus-circle"></i> Language</button></div>
                <br><br><span class="title">ACHIEVEMENTS</span><br><br><div>
                <div class="achieve" ><span><input type="checkbox" class="input-checkbox"></span><span contenteditable="true">Write your achievement</span></div>
                <div id="achievement"></div>
                <button id="achadd" type="button" class="btn btn-success" onclick="addAch()"><i class="fas fa-plus-circle"></i> Achievement</button>

                <button id="achrem" type="button" class="btn btn-danger" onclick="remAch(event)" style="margin-top: 0;"><i class="fas fa-minus-circle"></i> Achievement</button></div>
                <br><br><span class="title">INTERESTS</span><br><br><div>
                <div class="achieve" ><span><input type="checkbox" class="input-checkbox"></span><span contenteditable="true">Write interest</span></div>
                <div id="interest"></div>
                <button id="Intadd" type="button" class="btn btn-success" onclick="addInt()"><i class="fas fa-plus-circle"></i> Interest</button>

                <button id="Intrem" type="button" class="btn btn-danger" onclick="remInt(event)"><i class="fas fa-minus-circle"></i> Interest</button></div>
                </div>

                <div class="border"></div>
                <div class="rightside">
                <span class="title">PROFILE</span><br><br>
                <div contenteditable="true">
                Here u can write the basic information about your career like your forte, something about yourself that
                you want your interviewer to know. Try to keep it brief and only provide necessary information. Do not include information which is
                already written in your resume in some other section.</div>
                <br><br><span class="title">EDUCATION</span><br><br><div>
                <div id="education">
                    <div class="edublock">
                        <span><input type="checkbox" class="input-checkbox"></span>
                        <span class="education-head" contenteditable="true">YOUR DEGREE</span>
                        <div ><span contenteditable="true">Institute name</span> - <span contenteditable="true">Passing Year</span></div>
                    </div>
                </div>

                <button id="eduadd" type="button" class="btn btn-success" onclick="addedu()"><i class="fas fa-plus-circle"></i> Education</button>

                <button id="edurem" type="button" class="btn btn-danger" onclick="remedu(event)"><i class="fas fa-minus-circle"></i> Education</button></div>
                <br><br>
                <div class="new-section-div"><div><span><input type="checkbox" class="input-checkbox"></span><span class="title" contenteditable="true">NEW SECTION</span><br><br>
                <div contenteditable="true">
                This is the description part of your new section. Try to stay within limit and write something which has less
                than 400 characters. The spaces and symbols you use will also be included so use them for an indentation effect.</div>
                </div>

                <div id="newsec"></div>
                <button id="secadd" type="button" class="btn btn-success" onclick="addsec()"><i class="fas fa-plus-circle"></i> Section</button>

                <button id="secrem" type="button" class="btn btn-danger" onclick="remsec(event)"><i class="fas fa-minus-circle"></i> Section</button>
            </div>
            </div>
        </section>
     </div>
     <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js"></script>
    <script>
        function printpdf() {
    var content = document.getElementById("resume");

    // Hide buttons and input checkboxes
    const allButtons = document.querySelectorAll("#print button");
    const allInputCheckboxes = document.querySelectorAll(".input-checkbox");

    allButtons.forEach(button => {
        button.classList.add("none");
    });
    
    allInputCheckboxes.forEach(input => {
        input.classList.add("none");
    });

    // Use a timeout to ensure the DOM has updated before generating the PDF
    setTimeout(() => {
        html2pdf(content, {
            html2canvas: { scale: 0.8, logging: true, dpi: 500 },
            // Add any additional options here
        }).then(() => {
            // Show the buttons and input checkboxes again after generating the PDF
            allButtons.forEach(button => {
                button.classList.remove("none");
            });
            allInputCheckboxes.forEach(input => {
                input.classList.remove("none");
            });
        });
    }, 100); // Delay for 100ms to allow the DOM to update
}

function addedu() {
    const head = document.createElement('div');
    document.getElementById("education").appendChild(head);
    head.innerHTML = ('<div class="edublock"><span><input type="checkbox" class="input-checkbox"></span><span class="education-head" contenteditable="true">YOUR DEGREE</span><div ><span contenteditable="true">Institute name</span> - <span contenteditable="true">Passing Year</span></div></div>');
    saveresume();
}

function remedu(event) {
    let val = 0;
    const allInputCheckboxes = event.target.parentElement.getElementsByClassName("input-checkbox");
    const array = Array.from(allInputCheckboxes);
    if (array.length === 0) {
        alert("No fields are present to be deleted!")
    } else {
        array.forEach(element => {
            if (element.checked === true) {
                val = 1;
                element.parentElement.parentElement.remove();
            }
        });
        if (val === 0) alert("Please select the checkboxes to delete the required field!");
    }
    saveresume();
}

function addskill() {
    const head = document.createElement('div');
    document.getElementById("skills").appendChild(head);
    head.innerHTML = ('<div class="skill"><span><input type="checkbox" class="input-checkbox"></span><span><i class="fas fa-chevron-circle-right"></i></span> <span contenteditable="true">write your skill here</span></div>');
    saveresume();
}

function remskill(event) {
    let val = 0;
    const allInputCheckboxes = event.target.parentElement.getElementsByClassName("input-checkbox");
    const array = Array.from(allInputCheckboxes);
    if (array.length === 0) {
        alert("No fields are present to be deleted!")
    } else {
        array.forEach(element => {
            if (element.checked === true) {
                val = 1;
                element.parentElement.parentElement.remove();
            }
        });
        if (val === 0) alert("Please select the checkboxes to delete the required field!");
    }
    saveresume();
}

function addLang() {
    const head = document.createElement('div');
    document.getElementById("languages").appendChild(head);
    head.innerHTML = ('<div class="language"><span><input type="checkbox" class="input-checkbox"></span><span contenteditable="true">LANGNAME</span> - <span contenteditable="true">level u know</span></div>');
    saveresume();
}

function remLang(event) {
    let val = 0;
    const allInputCheckboxes = event.target.parentElement.getElementsByClassName("input-checkbox");
    const array = Array.from(allInputCheckboxes);
    if (array.length === 0) {
        alert("No fields are present to be deleted!");
    } else {
        array.forEach(element => {
            if (element.checked === true) {
                val = 1;
                element.parentElement.parentElement.remove();
            }
        });
        if (val === 0) alert("Please select the checkboxes to delete the required field!");
    }
    saveresume();
}

function addAch() {
    const head = document.createElement('div');
    document.getElementById("achievement").appendChild(head);
    head.innerHTML = ('<div class="achieve" ><span><input type="checkbox" class="input-checkbox"></span><span contenteditable="true">Write your achievement</span></div>');
    saveresume();
}

function remAch(event) {
    let val = 0;
    const allInputCheckboxes = event.target.parentElement.getElementsByClassName("input-checkbox");
    const array = Array.from(allInputCheckboxes);
    if (array.length === 0) {
        alert("No fields are present to be deleted!");
    } else {
        array.forEach(element => {
            if (element.checked === true) {
                val = 1;
                element.parentElement.parentElement.remove();
            }
        });
        if (val === 0) alert("Please select the checkboxes to delete the required field!");
    }
    saveresume();
}

function addInt() {
    const head = document.createElement('div');
    document.getElementById("interest").appendChild(head);
    head.innerHTML = ('<div class="achieve"><span><input type="checkbox" class="input-checkbox"></span><span contenteditable="true">Write interest</span></div>');
    saveresume();
}

function remInt(event) {
    let val = 0;
    const allInputCheckboxes = event.target.parentElement.getElementsByClassName("input-checkbox");
    const array = Array.from(allInputCheckboxes);
    if (array.length === 0) {
        alert("No fields are present to be deleted!");
    } else {
        array.forEach(element => {
            if (element.checked === true) {
                val = 1;
                element.parentElement.parentElement.remove();
            }
        });
        if (val === 0) alert("Please select the checkboxes to delete the required field!");
    }
    saveresume();
}

let maxNewSection = 1;

function addsec() {
    if (maxNewSection < 2) {
        const head = document.createElement('div');
        document.getElementById("newsec").appendChild(head);
        head.innerHTML = ('<div><span><input type="checkbox" class="input-checkbox"></span><span class="title" contenteditable="true">NEW SECTION</span><br><br><div contenteditable="true">This is the description part of your new section. Try to stay within limit and write something which has less than 400 characters. The spaces and symbols you use will also be included so use them for an indentation effect.</div></div>');
        maxNewSection++;
    } else {
        alert("Atmost 2 NEW SECTION can be added!");
    }
    saveresume();
}

function remsec(event) {
    let val = 0;
    const allInputCheckboxes = event.target.parentElement.getElementsByClassName("input-checkbox");
    const array = Array.from(allInputCheckboxes);
    if (array.length === 0) {
        alert("No fields are present to be deleted!");
    } else {
        array.forEach(element => {
            if (element.checked === true) {
                val = 1;
                maxNewSection--;
                element.parentElement.parentElement.remove();
            }
        });
        if (val === 0) alert("Please select the checkboxes to delete the required field!");
    }
    saveresume();
}

function saveresume() {
    var sec = document.getElementById("print");
    value1 = sec.innerHTML;
    var info = document.getElementById("custinfo");
    info.value = value1;
}
    </script>
    </body>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js"></script>
    <script src="/js/templates/template1.js"></script>
</html>