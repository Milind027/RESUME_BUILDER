<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder - FAANG Job Guide</title>
    <!-- <link rel="stylesheet" href="./css/homepage.css"> -->
    <style>* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background: #f0f4fa;
    color: #333;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: #4F729A;
    border-bottom: 1px solid #ddd;
}

.logo h1 {
    font-size: 24px;
    color: #333;
}

nav ul {
    display: flex;
    list-style: none;
}

nav ul li {
    margin-left: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #333;
    font-size: 16px;
}

.nav-buttons a {
    margin-left: 20px;
    padding: 10px 20px;
    text-decoration: none;
    font-size: 16px;
}

.login-btn {
    background-color: #fff;
    color: #333;
    border: 1px solid #333;
    border-radius: 4px;
}

.get-started-btn {
    background-color: #0066ff;
    color: #fff;
    border: none;
    border-radius: 4px;
}
.b{
    margin-left: 3px;
    padding: 5px 20px;
    text-decoration: none;
    font-size: 16px;
    
    color: #0f7ece;
    border: 1px solid #28b3ce;
    border-radius: 4px;
}

.hero {
    width: 100vw;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 50px;
    background-color: #eef3fc;
    background-image: url(./images/bg_2.jpg);
    background-position: center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    /* filter: blur(1px); */
    /* z-index: -1; */
}

.hero-text {
    max-width: 50%;
    margin-left: 100px;
    color: #1D3235;

}
/* 
.hero-text{background: rgba( 255, 255, 255, 0.05 );
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 0.5px );
    -webkit-backdrop-filter: blur( 0.5px );
    border-radius: 10px;
    border: 1px solid rgba( 255, 255, 255, 0.18 );
} */
.hero-text h2 {
    font-size: 60px;
    margin-bottom: 15px;
}

.faang {
    color: #0066ff;
}

.hero-text p {
    font-size: 18px;
    margin-bottom: 30px;
}

.cta-button {
    padding: 10px 25px;
    background-color: #0066ff;
    color: #fff;
    border: none;
    border-radius: 0px;
    text-decoration: none;
    margin-top: 15px;
}

.hero-image img {
    max-width: 100%;
}

.trusted-companies {
    text-align: center;
    padding: 50px 20px;
    background-image: linear-gradient(to right,#688BB5, #799AC5, #A6BEE4 );
}

.trusted-companies h3 {
    font-size: 24px;
    margin-bottom: 20px;
}

.company-logos {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;

}

.company-logos img {
    max-width: 150px;
    margin: 10px;
}

.how-it-works {
    text-align: center;
    padding: 50px 20px;
    background-image: linear-gradient();
}

footer {
    text-align: center;
    padding: 20px;
    background-color: #fff;
    border-top: 1px solid #ddd;
}

.temp {
    text-align: center;
    background-image: linear-gradient(to right, #688BB5, #799AC5, #A6BEE4);
    padding: 10px;
    
}

/* Slider CSS */
.slider_c .slider_li {
    display: grid;
    font-size: 0px;
    overflow-x: auto;
    margin-bottom: 50px;
    scrollbar-width: none;
    grid-template-columns: repeat(10, 1fr);
}

.slider_c .slider_li::-webkit-scrollbar {
    display: none;
}

.slider_c .slider_li .li_image {
    width: 350px;
    height: 400px;
    object-fit: fill;
    padding: 20px;
    border-radius: 5px;

}

.container {
    max-width: 1450px;
    width: 105%;
    left: 50px;
}

.slider_c {
    position: relative;
    left: 30px;
}

.slider_c .fa {
    position: absolute;
    height: 50px;
    width: 50px;
    top: 45%;
    border: none;
    outline: none;
    color: #fff;
    background: #6997cb;
    font-size: 2.2rem;
    cursor: pointer;

    border-radius: 50%;
    transform: translateY(-50%);
}

.slider_c .fa:hover {

    background: #476887;
}

.slider_c .fa#prev_slide {
    left: -20px;
    display: none;
}

.slider_c .fa#next_slide {
    right: -20px;
}

.container .slider_scrollbar {
    height: 24px;
    width: 100%;
    display: flex;
    align-items: center;
}

.slider_scrollbar .scrollbar_track {
    height: 2px;
    width: 100%;
    background: #ccc;
    position: relative;
    border-radius: 4px;
}

.slider_scrollbar:hover .scrollbar_track {
    height: 4px;
}

.slider_scrollbar .scrollbar_thumb {
    position: absolute;
    height: 100%;
    width: 50%;
    background:#476887;
    border-radius: inherit;
    cursor: grab;
}
.footer{
    background-image: linear-gradient(to right,#688BB5, #799AC5, #A6BEE4);
}   </style>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
/>
</head>
<body>
    
    <!-- Navbar Section -->
    <header>
        <div class="logo">
            <h1>Resume Builder</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Pricings</a></li>
            </ul>
        </nav>
        <div class="nav-buttons">
            <a href="./login.php" class="login-btn">Sign Up</a>
            <a href="form.php" class="get-started-btn">Get Started</a>
        </div>
    </header>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <!-- <a href="#" class="b" type="button">Online Resume Builder</a> -->
            <h2>Mastering the <br> <span class="faang">Faang Job</span>  Hunt:<br> Your Ultimate <br> Guide</h2>
            <p>Resume Builder: Ace your FAANG dreams. Expert <br> guidance, tailored templates, and insider tips for tech <br> professionals targeting top positions at FAANG <br> companies.</p>
            <a href="./templates/template1.php" class="cta-button">Write my resume now</a>
        </div>
        <div class="hero-image">
            <!-- <img src="./images/bg_2.jpg" alt="Resume Preview"> -->
        </div>
    </section>
    <section class="temp">
        <h2>Pick one of many world-class templates <br> and build your resume in minutes</h2>
        <div class="container">
            <div class="slider_c">
                <button id="prev_slide" class="fa fa-chevron-left"><i class="ri-arrow-left-double-fill"></i></button>
                <div class="slider_li">
                    <img src="./images/t1.jpg" alt="img1" class="li_image">
                   <a href=".\templates\template2.php">  <img src="./images/t2.jpg" alt="img2" class="li_image"></a>
                   <a href=".\templates\template1.php"> <img src="./images/t3.png" alt="img3" class="li_image"></a>
                    <img src="./images/t4.jpg" alt="img4" class="li_image">
                    <img src="./images/t5.jpg" alt="img5" class="li_image">
                    <img src="./images/t6.jpg" alt="img6" class="li_image">
                    <img src="./images/t7.jpg" alt="img7" class="li_image">
                    <img src="./images/t1.jpg" alt="img8" class="li_image">
                    <img src="./images/t4.jpg" alt="img9" class="li_image">
                    <img src="./images/t6.jpg" alt="img10" class="li_image">
                </div>
                <button id="next_slide" class="fa fa-chevron-right">
                    <i class="ri-arrow-right-double-fill"></i>
                </button>
            </div>
            <div class="slider_scrollbar">
                <div class="scrollbar_track">
                    <div class="scrollbar_thumb"></div>
                </div>
            </div>
        </div>
        <script src="/js/index.js"></script>

    </section>

    <!-- Trusted Companies Section -->
    <section class="trusted-companies">
        <h3>Trusted by great companies</h3>
        <div class="company-logos">
            <img src="https://www.pngkey.com/png/detail/464-4641731_ford-logo-black-and-white-indian-car-company.png" alt="The Guardian">
            <img src="https://www.pngkey.com/png/detail/111-1111316_columbia-pictures-print-logo-columbia-pictures-a-sony.png" alt="Lifehacker">
            <img src="https://www.pngkey.com/png/detail/270-2702166_ibm-is-a-global-technology-and-innovation-company.png" alt="Business.com">
            <img src="https://www.pngkey.com/png/detail/19-194940_lg-lives-and-dies-by-their-company-motto.png" alt="Forbes">
            <img src="https://www.pngkey.com/png/detail/300-3005531_tech-company-logo-design-logo-design-google-search.png"  alt="HuffPost">
        </div>
    </section>


   

    <section>
        
    </section>

    <footer class="footer">
        <p >Contact us at hello@caliber.design</p>
    </footer>
    <script>
        const initSlider = () => {
    const imagelist = document.querySelector(".slider_c .slider_li");
    const slideButtons = document.querySelectorAll(".slider_c .fa");
    const sliderScrollbar = document.querySelector(".container .slider_scrollbar");
    const scrollbarthumb = sliderScrollbar.querySelector(".scrollbar_thumb");
    const maxScrollLeft = imagelist.scrollWidth - imagelist.clientWidth;

    // Function to handle button clicks to scroll the slider
    slideButtons.forEach(button => {
        button.addEventListener("click", () => {
            const direction = button.id === "prev_slide" ? -1 : 1;
            const scrollAmount = imagelist.clientWidth * direction;
            imagelist.scrollBy({ left: scrollAmount, behavior: "smooth" });
        });
    });

    const handleSliderButtons = () => {
        slideButtons[0].style.display = imagelist.scrollLeft <= 0 ? "none" : "block";
        slideButtons[1].style.display = imagelist.scrollLeft >= maxScrollLeft ? "none" : "block";
    };

    const updateScrollThumbPosition = () => {
        const scrollPosition = imagelist.scrollLeft;
        const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarthumb.offsetWidth);
        scrollbarthumb.style.left = `${thumbPosition}px`;
    };

    const updateImageListScroll = (thumbPosition) => {
        const newScrollLeft = (thumbPosition / (sliderScrollbar.clientWidth - scrollbarthumb.offsetWidth)) * maxScrollLeft;
        imagelist.scrollLeft = newScrollLeft;
    };

    imagelist.addEventListener("scroll", () => {
        handleSliderButtons();
        updateScrollThumbPosition();
    });

    // Drag functionality for scrollbar thumb
    let isDragging = false;
    let startX;

    const onMouseMove = (e) => {
        if (!isDragging) return;
        const moveDistance = e.clientX - startX;
        const thumbPosition = Math.min(Math.max(0, scrollbarthumb.offsetLeft + moveDistance), sliderScrollbar.clientWidth - scrollbarthumb.offsetWidth);
        scrollbarthumb.style.left = `${thumbPosition}px`;
        updateImageListScroll(thumbPosition);
        startX = e.clientX;
    };

    const onMouseDown = (e) => {
        isDragging = true;
        startX = e.clientX;
        document.addEventListener("mousemove", onMouseMove);
    };

    const onMouseUp = () => {
        isDragging = false;
        document.removeEventListener("mousemove", onMouseMove);
    };

    scrollbarthumb.addEventListener("mousedown", onMouseDown);
    document.addEventListener("mouseup", onMouseUp);
};

window.addEventListener("load", initSlider);

    </script>

</body>
</html>
