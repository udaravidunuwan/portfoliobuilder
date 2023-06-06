<?php
session_start();

    include("config.php");
    // include("test.php");

    // $user_data=check_login($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- UNICONS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/styles.css">

    <!-- FAVICON -->
    <link rel="icon" href="./assets/img/favicon_io/favicon.ico" type="image/x-icon">

    <title>Project Portfolio</title>
</head>
<body>
    <!-- HEADER -->
    <header class="header" id="header">
        <nav class="nav container">
            <img src="./assets/img/favicon_io/apple-touch-icon.png" alt="" class="header__img">
            <a href="#" class="nav__logo">User Name</a>
            
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
                    <!-- <li class="nav__item">
                        <a  class="nav__link login__button-remake">
                            <i class="uil uil-signin nav__icon"></i> Login
                        </a>
                    </li> -->
                    <li class="nav__item">
                        <a  class="nav__link logout__button">
                            <i class="uil uil-signin nav__icon"></i> Logout
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
            <div class="home__container container grid">
                <div class="home__content grid">
                    <div class="home__social">
                        <a href="https://www.linkedin.com/in/udara-vidunuwan-431493210" target="_blank" class="home__social-icon">
                            <i class="uil uil-linkedin-alt"></i>
                        </a>
                        <a href="https://github.com/udaravidunuwan/" target="_blank" class="home__social-icon">
                            <i class="uil uil-github-alt"></i>
                        </a>
                    </div>

                    <div class="home__img">
                        <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <mask id="mask0" mask-type="alpha">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                            </mask>
                            <g mask="url(#mask0)">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403  
                                129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                <image class="home__blob-img" x="12" y="24" xlink:href="./assets/img/profile.png"/>
                            </g>
                        </svg>
                    </div>

                    <div class="home__data">
                        <h1 class="home__title">Hi, I'm Udara</h1>
                        <h3 class="home__subtitle">Data Capture Associate</h3>
                        <p class="home__description">Good knowladge and experience in software development. Aspiring to be a game developer. </p>
                        <a href="#contactme" class="button button--flex">
                            Contact Me<i class="uil uil-message button__icon"></i>
                        </a>
                    </div>
                </div>
                <div class="home__scroll">
                    <a href="#about" class="home__scroll-button button--flex">
                        <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                        <span class="home__scroll-name">Scroll down</span>
                        <i class="uil uil-arrow-down home__scroll-arrow"></i>
                    </a>
                </div>
            </div>
        </section>


        <!-- ABOUT -->
        <section class="about section" id="about">
            <h2 class="section__title">About Me</h2>
            <span class="section__subtitle">My Introduction</span>
            <div class="about__container container grid">
                <img src="./assets/img/about.jpg" alt="" class="about__img">

                <div class="about__data">
                    <p class="about__description">
                        I am a driven and enthusiastic software developer with a passion for creating engaging and immersive gaming experiences. With over 3 years of experience in developing applications using C# and C++, I am constantly honing my skills and working towards my dreams.
                    </p>
                    <div class="about__info">
                        <div>
                            <span class="about__info-title">08+</span>
                            <span class="about__info-name">Years <br> experience</span>
                        </div>
                        <div>
                            <span class="about__info-title">10+</span>
                            <span class="about__info-name">Completed <br> projects</span>
                        </div>
                        <div>
                            <span class="about__info-title">04+</span>
                            <span class="about__info-name">Companies <br> worked</span>
                        </div>
                    </div>

                    <div class="about__buttons">
                        <a download="" href="./assets/pdf/Alexa-Cv.pdf" class="button button--flex">
                            Download CV <i class="uil uil-download-alt button__icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <!-- SKiLLS -->
        <section class="skills section" id="skills">
            <h2 class="section__title">Skills</h2>
            <span class="section__subtitle">My technical level</span>

            <div class="skills__container container grid">
                <div>
                    <!-- SKILL1 -->
                    <div class="skills__content skills__open">
                        <div class="skills__header">
                            <i class="uil uil-brackets-curly skills__icon"></i>

                            <div>
                                <h1 class="skills__title">Frontend development</h1>
                                <span class="skills__subtitle">More than 3 years</span>
                            </div>

                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>

                        <div class="skills__list grid">

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">HTML</h3>
                                    <span class="skills__number">90%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__html"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">CSS</h3>
                                    <span class="skills__number">60%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__css"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">JS</h3>
                                    <span class="skills__number">80%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__js"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div>
                    <!-- SKILL2 -->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-server-network skills__icon"></i>

                            <div>
                                <h1 class="skills__title">Backend development</h1>
                                <span class="skills__subtitle">More than 2 years</span>
                            </div>

                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>

                        <div class="skills__list grid">

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">PHP</h3>
                                    <span class="skills__number">40%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__php"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Node Js</h3>
                                    <span class="skills__number">30%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__nodejs"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Firebase</h3>
                                    <span class="skills__number">70%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__firebase"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div>
                    <!-- SKILL3 -->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-swatchbook skills__icon"></i>

                            <div>
                                <h1 class="skills__title">Designer</h1>
                                <span class="skills__subtitle">More than 3 years</span>
                            </div>
                            
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>

                        <div class="skills__list grid">

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Figma</h3>
                                    <span class="skills__number">80%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__figma"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Sketch</h3>
                                    <span class="skills__number">85%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__sketch"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Photoshop</h3>
                                    <span class="skills__number">75%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__photoshop"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                <div>

                
            </div>
        </section>
        

        <!-- QUALIFICATION -->
        <section class="qualification section" id="qualifications">
            <h2 class="section__title">Quaifications</h2>
            <span class="section__subtitle">My personal journey</span>

            <div class="qualification__container container">
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
                    <!-- QUALIFICATION CONTENT 1 -->
                    <div class="qualification__content qualification__active " data-content id="education">
                        <!-- QUALIFICATION 1 -->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">DiTec</h3>
                                <span class="qualification__subtitle">Bandarawela - ESOFT Metro Campus</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2015 - 2016
                                </div>
                            </div>
    
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>
    
                        <!-- QUALIFICATION 2 -->
                        <div class="qualification__data">
                            <div></div>
                            
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                            
                            <div>
                                <h3 class="qualification__title">Java Application Development</h3>
                                <span class="qualification__subtitle">Badulla - Uva Wellassa University</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2016 - 2017
                                </div>
                            </div>
    
                            
                        </div>
    
                        <!-- QUALIFICATION 3 -->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">HND in Software Development</h3>
                                <span class="qualification__subtitle">Colombo - ICBT</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2020 - 2021
                                </div>
                            </div>
    
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>
                        
                        <!-- QUALIFICATION 4 -->
                        <div class="qualification__data">
                            <div></div>
    
                            <div>
                                <span class="qualification__rounder"></span>
                                <!-- <span class="qualification__line"></span> -->
                            </div>
                            
                            <div>
                                <h3 class="qualification__title">BSc in BISM</h3>
                                <span class="qualification__subtitle">Colombo - ICBT</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2022 - 2023
                                </div>
                            </div>
    
                            
                        </div>
                    </div>
                    
                    
                    <!-- QUALIFICATION CONTENT 2 -->
                    <div class="qualification__content" data-content id="work">
                        <!-- QUALIFICATION 1 -->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Software Developing Associate</h3>
                                <span class="qualification__subtitle">Quomatrix - Bandarawela</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2014 - 2016
                                </div>
                            </div>
    
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>
    
                        <!-- QUALIFICATION 2 -->
                        <div class="qualification__data">
                            <div></div>
                            
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                            
                            <div>
                                <h3 class="qualification__title">Medical Scribing</h3>
                                <span class="qualification__subtitle">MedSource Pvt Ltd - Colombo</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2021 - 2022
                                </div>
                            </div>
    
                            
                        </div>
    
                        <!-- QUALIFICATION 3 -->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Data Capture Assocate</h3>
                                <span class="qualification__subtitle">Pro Account Lanka Pvt Ltd - Colombo</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2022 - 2023
                                </div>
                            </div>
    
                            <div>
                                <span class="qualification__rounder"></span>
                                <!-- <span class="qualification__line"></span> -->
                            </div>
                        </div>

                    </div>

                    
                </div>
            </div>
        </section>


        <!-- SERVICES -->
        <section class="services section" id="services">
            <h2 class="section__title">Services</h2>
            <span class="section__subtitle">What I offer</span>

            <div class="services__container container grid">
                <!-- SERVICES 1 -->
                <div class="services__content">
                    <div>
                        <i class="uil uil-web-grid services__icon"></i>
                        <h3 class="services__title">UI/UX <br> Designer</h3>
                    </div>
                    
                    <span class="button button--flex button--small button--link services__button">
                        View More
                        <i class="uil uil-arrow-right button__icon"></i>
                    </span>

                    <div class="services__model">
                        <div class="services__model-content">
                            <h4 class="services__model-title">UI/UX <br> Designer</h4>
                            <i class="uil uil-times services__model-close"></i>

                            <ul class="services__model-services grid">
                                <li class="services__model-service">
                                    <i class="uil uil-check-circle services__model-icon"></i>
                                    <p>I develop the user interface</p>
                                </li>
                                <li class="services__model-service">
                                    <i class="uil uil-check-circle services__model-icon"></i>
                                    <p>Web page Development</p>
                                </li>
                                <li class="services__model-service">
                                    <i class="uil uil-check-circle services__model-icon"></i>
                                    <p>I create element interactions</p>
                                </li>
                                <li class="services__model-service">
                                    <i class="uil uil-check-circle services__model-icon"></i>
                                    <p>I position your company brand</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- SERVICES 2 -->
                <div class="services__content">
                    <div>
                        <i class="uil uil-arrow services__icon"></i>
                        <h3 class="services__title">Frontend <br> Developer</h3>
                    </div>
                    <span class="button button--flex button--small button--link services__button">
                        View More
                        <i class="uil uil-arrow-right button__icon"></i>
                    </span>

                    <div class="services__model">
                        <div class="services__model-content">
                            <h4 class="services__model-title">Frontend <br> Developer</h4>
                            <i class="uil uil-times services__model-close"></i>

                            <ul class="services__model-services grid">
                                <li class="services__model-service">
                                    <i class="uil uil-check-circle services__model-icon"></i>
                                    <p>I develop the user interface</p>
                                </li>
                                <li class="services__model-service">
                                    <i class="uil uil-check-circle services__model-icon"></i>
                                    <p>Web page Development</p>
                                </li>
                                <li class="services__model-service">
                                    <i class="uil uil-check-circle services__model-icon"></i>
                                    <p>I create element interactions</p>
                                </li>
                                <li class="services__model-service">
                                    <i class="uil uil-check-circle services__model-icon"></i>
                                    <p>I position your company brand</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- SERVICES 3 -->
                <div class="services__content">
                    <div>
                        <i class="uil uil-pen services__icon"></i>
                        <h3 class="services__title">Backend <br> Developer</h3>
                    </div>
                    <span class="button button--flex button--small button--link services__button">
                        View More
                        <i class="uil uil-arrow-right button__icon"></i>
                    </span>

                    <div class="services__model">
                        <div class="services__model-content">
                            <h4 class="services__model-title">Backend <br> Developer</h4>
                            <i class="uil uil-times services__model-close"></i>

                            <ul class="services__model-services grid">
                                <li class="services__model-service">
                                    <i class="uil uil-check-circle services__model-icon"></i>
                                    <p>I develop the user interface</p>
                                </li>
                                <li class="services__model-service">
                                    <i class="uil uil-check-circle services__model-icon"></i>
                                    <p>Web page Development</p>
                                </li>
                                <li class="services__model-service">
                                    <i class="uil uil-check-circle services__model-icon"></i>
                                    <p>I create element interactions</p>
                                </li>
                                <li class="services__model-service">
                                    <i class="uil uil-check-circle services__model-icon"></i>
                                    <p>I position your company brand</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        

        <!-- PROJECT IN MIND -->
        <section class="project section">
            <div class="project__bg">
                <div class="project__container container grid">
                    <div class="project__data">
                        <h2 class="project__title">You have a new Project</h2>
                        <p class="project__description">Conact me now</p>

                        <a href="#contactme" class="button button--flex button--white">
                            Contact Me
                            <i class="uil uil-message project__icon button__icon"></i>
                        </a>
                    </div>

                    <img src="./assets/img/project.png" alt="" class="project__img">
                </div>
            </div>
        </section>


        <!-- CONTCT ME -->
        <section class="contact section" id="contactme">
            <h2 class="section__title">Contact Me</h2>
            <span class="section__subtitle">Get in touch</span>

            <div class="contact__container container grid">
                <div>

                    <div class="contact__information">
                        <i class="uil uil-phone-alt contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Call me</h3>
                            <span class="contact__subtitle">+94 75 449 9926</span>
                        </div>
                    </div>
                    
                    <div class="contact__information">
                        <i class="uil uil-envelope contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Email</h3>
                            <span class="contact__subtitle">udara.somapala@pro-account.lk</span>
                        </div>
                    </div>

                    <div class="contact__information">
                        <i class="uil uil-map-marker contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Location</h3>
                            <span class="contact__subtitle">Pro Account Lanka, Access Towers 1, Level 6, No 278, Union Place, Colombo 2</span>
                        </div>
                    </div>

                </div>

                <form action="" class="contact__form grid">
                    <div class="contact__inputs grid">
                        <div class="contact__content">
                            <label for="" class="contact__label">Name</label>
                            <input type="text" class="contact__input">
                        </div>
                        <div class="contact__content">
                            <label for="" class="contact__label">Email</label>
                            <input type="email" class="contact__input">
                        </div>
                    </div>
                    <div class="contact__content">
                        <label for="" class="contact__label">Project</label>
                        <input type="text" class="contact__input">
                    </div>
                    <div class="contact__content">
                        <label for="" class="contact__label">Message</label>
                        <textarea name="" id="" cols="0" rows="7" class="contact__input"></textarea>
                    </div>

                    <div>
                        <a href="#" class="button button--flex">
                              Send Message
                              <i class="uil uil-message button__icon"></i>
                        </a>
                    </div>
                </form>
            </div>
        </section>


        <!-- LOGIN REMAKE -->
        <!-- <section class="login-remake section" id="login-remake">

            <div class="login-remake__model">
                <div class="login-remake__model-content">

                    <h4 class="login-remake__model-title">Login</h4>
                    <i class="uil uil-times login-remake__model-close"></i>

                    <form action="" class="login__form grid" method="post">
                        <div class="login__inputs grid">

                            <div class="login-remake__content">
                                <label for="loginEmail" class="login__label">Email</label>
                                <input id="email" name="loginEmail" type="email" class="login__input email"  placeholder="Enter email here" autocomplete="off" required>
                            </div>
                            <div class="login-remake__content">
                                <label for="LoginPassword" class="login__label">Password</label>
                                <input id="password" name="LoginPassword" type="password" class="login__input password"  placeholder="Enter password here" required>
                            </div>
                            <div class="">
                                <label for="showPassword" class="">Show password</label>
                                <input type="checkbox" id="showPassword" class="">
                            </div>

                        </div>
                        
                        <div>
                            <button type="submit" class="login-button" id="login-submit">Login</button>
                        </div>
                    </form>

                </div>
            </div>

        </section> -->


    </main>

   
    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title">Udara Vidunuwan</h1>
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

    <!-- SWIPER JS -->
    <script src="./assets/js/swiper-bundle.min.js"></script>

    <!-- MAIN JS -->
    <script src="./assets/js/main.js"></script>
</body>

</html>