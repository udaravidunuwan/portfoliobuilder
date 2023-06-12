<?php
require 'function.php';
if(isset($_SESSION["user_id"])){
    $user_id = $_SESSION["user_id"];

    
    $stmt = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM users WHERE user_id = $user_id"));

}
else{
  header("Location: index.php");
}
?>


<!-- The defalut template will be Jhon Doe -->
<!-- No personal details yet -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- UNICONS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/editor.css">

    <!-- FAVICON -->
    <link rel="icon" href="./assets/img/favicon_io/favicon.ico" type="image/x-icon">

    <title>Project Portfolio</title>
</head>
<body>
    <!-- HEADER -->
    <header class="header" id="header">
        <nav class="nav container">
            <!-- IF ANY USERNAME is stored in database fetch it and display -->
            <!-- IF NO USERNAME in database; then Keep as USER and once the username is given and saved below, fetch itand display -->
            <img src="./assets/img/favicon_io/apple-touch-icon.png" alt="" class="header__img">
            <a href="#" class="nav__logo">
            <?php if ($stmt) {
                        echo $stmt["user_id"];
                    } else {
                        echo "User Name";
                    } ?>
            </a>
            
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">
                            <i class="uil uil-estate nav__icon"></i> Home
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">
                            <i class="uil uil-user nav__icon"></i> About
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#skills" class="nav__link">
                            <i class="uil uil-file-alt nav__icon"></i> Skills
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#qualifications" class="nav__link">
                            <i class="uil uil-file-bookmark-alt nav__icon"></i> Qualifications
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#services" class="nav__link">
                            <i class="uil uil-file-lock-alt nav__icon"></i> Services
                        </a>
                    </li>
                    
                    <li class="nav__item">
                        <a href="#contactme" class="nav__link">
                            <i class="uil uil-comment-message nav__icon"></i> Contact me
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="profile.php" class="nav__link view__button">
                            <i class="uil uil-image-check nav__icon"></i> View
                        </a>
                    </li>
                    
                </ul>
                <i class="uil uil-times nav__close" id="nav-close"></i>
            </div>

            <div class="nav__btns">
                
                <!-- Theme Change Button -->
                <i class="uil uil-moon change-theme" id="theme-button"></i>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>
        </nav>
    </header>

    <!-- MAIN -->
    <main class="main">

        <!-- HOME -->
        <section class="home section" id="home">
            <div class="editor__container container ">
        
                <div class="home__data">
                    <h1 class="home__title">Hi, User</h1>
                    <h3 class="home__subtitle">Welcome to Editor</h3>
                    <p class="home__description">Add or Update your data as you wish.</p>
                </div>
                
                    
                <form action="" class="editor__form editor__border">
                    <div class="editor__inputs ">
                        <div class="editor__content">
                            <i class="uil uil-user-circle editor-icon" ></i>
                            <label for="" class="editor__label">First Name</label>
                            <input type="text" class="editor__input" placeholder="Enter First Name here" autocomplete="off">
                        </div>
                        <div class="editor__content">
                            <i class="uil uil-user-circle editor-icon" ></i>
                            <label for="" class="editor__label">Last Name</label>
                            <input type="text" class="editor__input" placeholder="Enter Last Name here" autocomplete="off">
                        </div>
                        <div class="editor__content">
                            <i class="uil uil-sitemap editor-icon" ></i>
                            <label for="" class="editor__label">Designation</label>
                            <input type="text" class="editor__input" placeholder="Enter Designation here" autocomplete="off">
                        </div>
                        <div class="editor__content editor-icon">
                            <i class="uil uil-book-reader"></i>
                            <label for="" class="editor__label">Self Introduction</label>
                            <textarea name="" id="" cols="0" rows="7" class="editor__input" placeholder="Enter Self Introduction here" autocomplete="off"></textarea>
                        </div>
                        <div class="editor__content">
                            <i class="uil uil-linkedin-alt editor-icon" ></i>
                            <label for="" class="editor__label">LinkedIn</label>
                            <input type="text" class="editor__input" placeholder="Enter URL here" autocomplete="off">
                        </div>
                        <div class="editor__content">
                            <i class="uil uil-github-alt editor-icon"></i>
                            <label for="" class="editor__label">Github</label>
                            <input type="text" class="editor__input" placeholder="Enter URL here" autocomplete="off">
                        </div>
                        <div class="editor__content ">
                            <input type="file" id="photoInput" class="editor__input" accept="image/*" onchange="previewPhoto(this, document.getElementById('photoPreview__home'))">
                            <div id="photoPreview__home" class="photo__preview__circle">

                            </div>
                        </div>
                        <div class="editor__save__button">
                            <a href="#" class="button button--flex">
                                    Save Changes
                                    <i class="uil uil-save button__icon"></i>
                            </a>
                        </div>
                    </div>
                    
                </form>

            </div>
        </section>

        <!-- ABOUT -->
        <section class="about section" id="about">
            <h2 class="section__title">About Me</h2>
            <span class="section__subtitle">My Introduction</span>
            <div class="editor__container container ">


                <form action="" class="editor__form editor__border">
                    <div class="editor__inputs ">
                        <div class="editor__content ">
                            <i class="uil uil-book-reader editor-icon"></i>
                            <label for="" class="editor__label">About User</label>
                            <textarea name="" id="" cols="0" rows="7" class="editor__input" placeholder="Enter About User here" autocomplete="off"></textarea>
                        </div>
                        <div class="editor__content">
                            <i class="uil uil-3-plus editor-icon" ></i>
                            <label for="" class="editor__label">Years of Experience</label>
                            <input type="number" min="0" class="editor__input" placeholder="Enter No. of years here" autocomplete="off" oninput="validateNumberInput(this)">
                        </div>
                        <div class="editor__content">
                            <i class="uil uil-notebooks editor-icon" ></i>
                            <label for="" class="editor__label">Completed Projects</label>
                            <input type="number" class="editor__input" placeholder="Enter No. of years here" autocomplete="off" oninput="validateNumberInput(this)">
                        </div>
                        <div class="editor__content">
                            <i class="uil uil-building editor-icon" ></i>
                            <label for="" class="editor__label">Companies Worked</label>
                            <input type="number" class="editor__input" placeholder="Enter No. of years here" autocomplete="off" oninput="validateNumberInput(this)">
                        </div>
                
                        <div class="editor__content ">
                            <input type="file" id="photoInput" class="editor__input file__upload__button" accept="image/*" onchange="previewPhoto(this, document.getElementById('photoPreview__about'))">
                            <div id="photoPreview__about" class="photo__preview__circle">
                            </div>
                        </div>
                        <div class="editor__save__button">
                            <a href="#" class="button button--flex">
                                  Save Changes
                                  <i class="uil uil-save button__icon"></i>
                            </a>
                        </div>
                    </div>
                    
                </form>

            </div>
        </section>

        <!-- SKiLLS -->
        <section class="skills section" id="skills">
            <h2 class="section__title">Skills</h2>
            <span class="section__subtitle">My technical level</span>

            <div class="editor__container container">
                
                <form action="" class="editor__form editor__border">
                    <div class="editor__inputs ">
                        
                        <!-- Skill Subject Category -->
                        <div class="skill__subject editor__border">
                            
                            <i class="uil uil-times editor-icon remove__button"></i>
                            <div class="editor__content">
                                <i class="uil uil-books editor-icon"></i>
                                <label for="" class="editor__label">Skill Category</label>
                                <input type="text" class="editor__input" placeholder="Enter Skill Category Name here" autocomplete="off">
                            </div>
                            <div class="editor__content">
                                <i class="uil uil-3-plus editor-icon"></i>
                                <label for="" class="editor__label">No. of Years</label>
                                <input type="number" class="editor__input" placeholder="Enter No. of Years here" autocomplete="off" oninput="validateNumberInput(this)">
                            </div>

                            <!-- Skill -->
                            <div class="skill__subject__skill editor__border">
                                <i class="uil uil-times editor-icon remove__button"></i>
                                <div class="editor__content">
                                    <i class="uil uil-book editor-icon"></i>
                                    <label for="" class="editor__label">Skill Name</label>
                                    <input type="text" class="editor__input" placeholder="Enter Skill Name here" autocomplete="off"> 
                                </div>
                                <div class="editor__content">
                                    <i class="uil uil-percentage editor-icon"></i>
                                    <label for="" class="editor__label">Proficiency in Percentage</label>
                                    <input type="number" class="editor__input" placeholder="Enter percentage here" autocomplete="off" oninput="validateNumberInput(this); validatePercentageInput();" min="0"  max="100">
                                </div>
                            </div>
                            <i class="uil uil-plus editor-icon add__button">Add New Skill</i>

                        </div>
                        <i class="uil uil-plus editor-icon add__button">Add New Skill Category</i>

                        <div class="editor__save__button">
                            <a href="#" class="button button--flex">
                                  Save Changes
                                  <i class="uil uil-save button__icon"></i>
                            </a>
                        </div>
                    </div>
                    
                </form>
                
                
            </div>
        </section>
        
        <!-- QUALIFICATION -->
        <section class="qualification section" id="qualifications">
            <h2 class="section__title">Quaifications</h2>
            <span class="section__subtitle">My personal journey</span>

            <div class="editor__container container">
                <div class="qualification__tabs">
                    <div class="qualification__button button--flex qualification__active" data-target="#education">
                        <i class="uil uil-graduation-cap qualification__icon"></i>
                        Education
                    </div>
                    
                    <div class="qualification__button button--flex" data-target="#work">
                        <i class="uil uil-briefcase-alt qualification__icon"></i>
                        Work
                    </div>
                </div>

                <div class="qualification__sections"> 
                    <div class="qualification__content qualification__active " data-content id="education">
                        
                        <form action="" class="editor__form editor__border">

                            <div class="qualification__data editor__border">

                                <i class="uil uil-times editor-icon remove__button"></i>
                                <div class="editor__inputs ">
                                    <div class="editor__content ">
                                        <i class="uil uil-book-reader editor-icon"></i>
                                        <label for="" class="editor__label">Education Qualification</label>
                                        <input type="text" class="editor__input" placeholder="Enter Qualifiacation here" autocomplete="off">
                                    </div>
                                    <div class="editor__content ">
                                        <i class="uil uil-university editor-icon"></i>
                                        <label for="" class="editor__label">Institution</label>
                                        <input type="text" class="editor__input" placeholder="Enter Institution here" autocomplete="off">
                                    </div>
                                    <div class="editor__content ">
                                        <i class="uil uil-map-marker-alt editor-icon"></i>
                                        <label for="" class="editor__label">City</label>
                                        <input type="text" class="editor__input" placeholder="Enter City here" autocomplete="off">
                                    </div>
                                    <div class="editor__content">
                                        <i class="uil uil-3-plus editor-icon" ></i>
                                        <label for="yearFrom" class="editor__label">Year From</label>
                                        <select id="Education__yearFrom" name="yearFrom" class="editor__input year__from__to" > 
                                            <option value="" selected>Select</option>
                                        </select>
                                    </div>
                                    <div class="editor__content">
                                        <i class="uil uil-3-plus editor-icon" ></i>
                                        <label for="yearTo" class="editor__label">Year To</label>
                                        <select id="Education__yearTo" name="yearTo" class="editor__input year__from__to"> 
                                            <option value="" selected>Select</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                
                            </div>

                            <i class="uil uil-plus editor-icon add__button">Add New Qualification</i>
                            <div class="editor__save__button">
                                <a href="#" class="button button--flex">
                                        Save Changes
                                        <i class="uil uil-save button__icon"></i>
                                </a>
                            </div>

                        </form>
                        
                    </div>
                    
                    <div class="qualification__content" data-content id="work">

                        <form action="" class="editor__form editor__border">

                            <div class="qualification__data editor__border">

                                <i class="uil uil-times editor-icon remove__button"></i>
                                <div class="editor__inputs ">
                                    <div class="editor__content ">
                                        <i class="uil uil-book-reader editor-icon"></i>
                                        <label for="" class="editor__label">Work Qualification</label>
                                        <input type="text" class="editor__input" placeholder="Enter Quaification here" autocomplete="off">
                                    </div>
                                    <div class="editor__content ">
                                        <i class="uil uil-building editor-icon"></i>
                                        <label for="" class="editor__label">Company</label>
                                        <input type="text" class="editor__input" placeholder="Enter URL here" autocomplete="off">
                                    </div>
                                    <div class="editor__content ">
                                        <i class="uil uil-map-marker-alt editor-icon"></i>
                                        <label for="" class="editor__label">City</label>
                                        <input type="text" class="editor__input" placeholder="Enter URL here"autocomplete="off">
                                    </div>
                                    <div class="editor__content">
                                        <i class="uil uil-3-plus editor-icon" ></i>
                                        <label for="yearFrom" class="editor__label">Year From</label>
                                        <select id="Work__yearFrom" name="yearFrom" class="editor__input year__from__to"> 
                                            <option value="">Select</option>
                                        </select>
                                    </div>
                                    <div class="editor__content">
                                        <i class="uil uil-3-plus editor-icon" ></i>
                                        <label for="yearTo" class="editor__label">Year To</label>
                                        <select id="Work__yearTo" name="yearTo" class="editor__input year__from__to"> 
                                            <option value="">Select</option>
                                        </select>
                                    </div>
                                    
                                </div>
                            </div>

                            <i class="uil uil-plus editor-icon add__button">Add New Qualification</i>
                            <div class="editor__save__button">
                                <a href="#" class="button button--flex">
                                        Save Changes
                                        <i class="uil uil-save button__icon"></i>
                                </a>
                            </div>
                        </form>
                    </div>
                    
                </div>
                
            </div>
        </section>

        <!-- SERVICES -->
        <section class="services section" id="services">
            <h2 class="section__title">Services</h2>
            <span class="section__subtitle">What I offer</span>

            <div class="editor__container container">
                
                <form action="" class="editor__form editor__border">
                    <div class="editor__inputs ">
                        
                        <!-- Service Category -->
                        <div class="service__category editor__border">
                            
                            <i class="uil uil-times editor-icon remove__button"></i>
                            <div class="editor__content">
                                <i class="uil uil-books editor-icon"></i>
                                <label for="" class="editor__label">Service Type</label>
                                <input type="text" class="editor__input" placeholder="Enter Service Type here" autocomplete="off">
                            </div>

                            <!-- Service I Offer -->
                            <div class="service__offered editor__border">
                                <i class="uil uil-times editor-icon remove__button"></i>
                                <div class="editor__content">
                                    <i class="uil uil-book editor-icon"></i>
                                    <label for="" class="editor__label">Service</label>
                                    <input type="text" class="editor__input" placeholder="Enter Service here" autocomplete="off">
                                </div>
                            </div>
                            <i class="uil uil-plus editor-icon add__button">Add New Service</i>

                        </div>
                        <i class="uil uil-plus editor-icon add__button">Add New Service Type</i>

                        <div class="editor__save__button">
                            <a href="#" class="button button--flex">
                                  Save Changes
                                  <i class="uil uil-save button__icon"></i>
                            </a>
                        </div>
                    </div>
                    
                </form>
                
                
            </div>

        </section>
        

        <!-- PROJECT IN MIND -->
        <section class="project section">
            <h2 class="section__title">New Project</h2>
            <span class="section__subtitle">Have you any project in mind?</span>
            <div class="editor__container container ">


                <form action="" class="editor__form editor__border" method="post">
                    <div class="editor__inputs ">
                        
                        <div class="editor__content ">
                            <?php if(!empty($statusMsg)){ ?>
                                <p class="status <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
                                <?php  } ?>
                            <input type="file" name="image" id="photoInput" class="editor__input file__upload__button" accept="image/*" onchange="previewPhoto(this, document.getElementById('photoPreview__new-project'))">
                            <div id="photoPreview__new-project" class="photo__preview__circle">
                            </div>
                        </div>
                        <div class="editor__save__button">
                            <!-- <a href="#" class="button button--flex" id="project__save__btn" >
                                  Save Changes
                                  <i class="uil uil-save button__icon"></i>
                            </a> -->
                            <button type="submit" name="submit" class="button button--flex" id="project__save__btn" value="Upload">
                                  Save Changes
                                  <i class="uil uil-save button__icon"></i>
                            </button>
                        </div>
                    </div>
                    
                </form>

            </div>
        </section>

        <!-- CONTCT ME -->
        <section class="contact section" id="contactme">
            <h2 class="section__title">Contact Me</h2>
            <span class="section__subtitle">Get in touch</span>

            <div class="editor__container container ">


                <form id="contactme__form" action="" class="editor__form editor__border">
                    <div class="editor__inputs ">
                        
                        <div class="editor__content">
                            <i class="uil uil-3-plus editor-icon" ></i>
                            <label for="" class="editor__label">Mobile Number</label>
                            <input type="text" id="contactme__mobile-number" class="editor__input" placeholder="+94XXXXXXXXX" autocomplete="off">
                        </div>
                        <div class="editor__content">
                            <i class="uil uil-notebooks editor-icon" ></i>
                            <label for="" class="editor__label">Email</label>
                            <input type="email" class="editor__input" placeholder="Enter Email here" autocomplete="off">
                        </div>

                        <div class="editor__content ">
                            <i class="uil uil-book-reader editor-icon"></i>
                            <label for="" class="editor__label">Location</label>
                            <textarea name="" id="" cols="0" rows="7" class="editor__input" placeholder="Enter About User here" autocomplete="off"></textarea>
                        </div>
                
                       
                        <div class="editor__save__button">
                            <a href="#" class="button button--flex" id="contact__saveBtn">
                                  Save Changes
                                  <i class="uil uil-save button__icon"></i>
                            </a>
                        </div>
                    </div>
                    
                </form>

            </div>
        </section>


        

    </main>

   
    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <!-- Fetch data from database else site as User: default -->
                    <h1 class="footer__title">User</h1>
                    <span class="footer__subtitle">Data Capture Associate</span>
                </div>

                <ul class="footer__links">
                    <li>
                        <a href="#services" class="footer__link">Services</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="footer__link">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contactme" class="footer__link">ContantMe</a>
                    </li>
                </ul>

                <div class="footer__socials">
                    <a href="https://facebook.com/" target="_blank" class="footer__social">
                        <i class="uil uil-facebook-f"></i>
                    </a>
                    <a href="https://instagram.com/" target="_blank" class="footer__social">
                        <i class="uil uil-instagram"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="footer__social">
                        <i class="uil uil-twitter-alt"></i>
                    </a>
                </div>
            </div>

            <p class="footer__copy">&#169; Pro Account Lanka. All rights reserved</p>
        </div>
    </footer>
    
    <!-- SCROLL TOP -->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>

    

    <!-- MAIN JS -->
    <script src="assets/js/editor.js"></script>
</body>

</html>