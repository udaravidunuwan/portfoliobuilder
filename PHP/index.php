<?php 
require 'function.php';
if(isset($_SESSION["user_id"])){
  header("Location: profile.php");
}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- UNICONS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/index.css">

    <!-- FAVICON -->
    <link rel="icon" href="./assets/img/favicon_io/favicon.ico" type="image/x-icon">

    <title>Project Portfolio</title>
</head>
<body>
    <header class="header" id="header">
        <nav class="nav container">
            <img src="./assets/img/favicon_io/apple-touch-icon.png" alt="" class="header__img">
            <a href="#" class="nav__logo">Project Portfolio</a>
            
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    
                    <li class="nav__item">
                        <a class="nav__link login__button-remake">
                            <i class="uil uil-signin nav__icon"></i> Login
                        </a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link register__button">
                            <i class="uil uil-sign-in-alt nav__icon"></i> Register
                        </a>
                    </li>

                </ul>
                <i class="uil uil-times nav__close" id="nav-close"></i>
            </div>

            <div class="nav__btns">
                
                <i class="uil uil-moon change-theme" id="theme-button"></i>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>
        </nav>
    </header>

    <main class="main">

        <section class="section">
            <div class="container grid">
                <div class="home__content ">

                    <div class="home__data">
                        <h1 class="home__title">Welcome to the Best Free Online Resume Builder!</h1>

                        <img src="./assets/img/site/index_pic2.jpg" alt="" class="home__img">

                        <p class="home__description">Your resume is often the first impression you make on potential employers. 
                            It's essential to showcase your skills, experiences, and qualifications in a professional and compelling way. 
                            That's where our Online Resume Builder comes in. We are dedicated to helping you create a standout resume that lands you the job of your dreams.
                        </p>
                    </div>

                    <div>
                        <a id="createNewPortfolio" href="" class="button button--flex">
                            Create New Portfolio 
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <section class="login-remake section" id="login-remake">

            <div class="login-remake__model">
                <div class="login-remake__model-content">

                    <h4 class="login-remake__model-title">Login</h4>
                    <i class="uil uil-times login-remake__model-close"></i>

                    <form autocomplete="off" action="" class="login__form grid" method="post" >
                        <div class="login__inputs grid">
                            <input type="hidden" id="actionLog" value="login" >

                            <div class="login-remake__content">
                                <label for="loginEmail" class="login__label">Email</label>
                                <input id="emailLogin" name="loginEmail" type="email" class="login__input email"  placeholder="Enter email here" required>
                            </div>
                            <div class="login-remake__content">
                                <label for="LoginPassword" class="login__label">Password</label>
                                <input id="passwordLogin" name="LoginPassword" type="password" class="login__input password"  placeholder="Enter password here" required>
                            </div>
                            <div class="">
                                <label for="showPasswordLogin" class="">Show password</label>
                                <input type="checkbox" id="showPasswordLogin" class="">
                            </div>

                        </div>
                        
                        <div>
                            <button type="submit" class="login-button" id="login-submit"  onclick="submitData();">Login</button>
                        </div>
                        
                    </form>

                </div>
            </div>

        </section>


        <section class="register section" id="register">

            <div class="register__model">
                <div class="register__model-content">

                    <h4 class="register__model-title">Register</h4>
                    <i class="uil uil-times register__model-close"></i>

                    <form autocomplete="off" action="" class="register__form grid" method="post">
                        <div class="register__inputs grid">
                            <input type="hidden" id="actionReg" value="register" >

                            <div class="register__content">
                                <label for="registerEmail" class="register__label">Email</label>
                                <input id="emailRegister" name="registerEmail" type="email" class="register__input email"  placeholder="Enter email here" required>
                            </div>
                            <div class="register__content">
                                <label for="registerPassword" class="register__label">Password</label>
                                <input id="passwordRegister" name="registerPassword" type="password" class="register__input password"  placeholder="Enter password here" required>
                            </div>
                            <div class="register__content">
                                <label for="registerPasswordConfirm" class="register__label">Confirm Password</label>
                                <input id="passwordRegisterConfirm" name="registerPasswordConfirm" type="password" class="register__input password"  placeholder="Enter password here" required>
                            </div>
                            <div class="">
                                <label for="showPasswordRegister" class="">Show password</label>
                                <input type="checkbox" id="showPasswordRegister" class="">
                            </div>

                        </div>
                        
                        <div>
                            <button type="submit" class="register-button" id="register-submit" onclick="submitData();">Register</button>
                        </div>

                    </form>

                </div>
            </div>

        </section>


    </main>

   
    <footer class="footer">
        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title">Udara Vidunuwan</h1>
                    <span class="footer__subtitle">Data Capture Associate</span>
                </div>

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
    <?php require 'script.php' ?>
    <script src="./assets/js/index.js"></script>
</body>

</html>