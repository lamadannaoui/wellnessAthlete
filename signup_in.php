<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
        <meta charset="utf-8">
        
        <!-- kermel ldesign w font mn google -->
        <link rel="stylesheet" href="css/signupin.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
        
        <title>WA_signup-in</title> 
    </head>
    
    <!-- 3emel container kbire b2alba 4 z8ar wahde lal signup wahde signin w 2 kermel yetna2al bayneton -->
    <body>
        <div class="main">
            
            <!-- he lcontainer hiye li khasa b 2awal part mnel signup -->
            <div class="container a-container" id="a-container">
                <form class="form" id="a-form" method="post" action="signup.php"> <!-- add method+action for php --><!-- (klchi bl english) he lnote eli kermel bas bedi 3adel koun zeker chu bedi a3mel :P -->
                    <h2 class="form_title title">Create Account</h2>
                    <input class="form__input" type="text" name="user" placeholder="Full Name" required>
                    <input class="form__input" type="text" name="email" placeholder="Email" required>
                    <input class="form__input" type="password" name="pass" placeholder="Password" required>
                    <input class="form__button button" type="submit" value="Next step">                    
                    <!-- <button class="form__button button submit" onclick="window.location.href='resume-signup.html'">Next STEP</button> -->
                </form>
            </div>
            
            <!-- he lcontainer khasa bl signin -->
            <div class="container b-container" id="b-container">
                <form class="form" id="b-form" method="" action=""><!-- add met+act for php -->
                    <h2 class="form_title title">Sign in to Website</h2>
                    <input class="form__input" type="text" name="Email" placeholder="Email" required>
                    <input class="form__input" type="password" name="password" placeholder="Password" required>
                    <a class="form__link" href="#">Forgot your password?</a>
                    <button class="form__button button" type="submit">SIGN IN</button> <!-- need to add some function and Regexp and a destination -->
                </form>
            </div>
            
            <!-- hol mtl container z8ire 7atet b2al2a description z8ire w fa2se laltebdile ben container lsignin wcontainer lsignup wlcircle hol bas lal design -->
            <div class="switch" id="switch-cnt">
                <div class="switch__circle"></div><!--he lcircle yali mn ta7t-->
                <div class="switch__circle switch__circle--t"></div><!--he lcircle yali mnfo2-->
                <!--he btkoun mawjoude had container lsignup eza 3endu acc bisir byef2os lfa2se wbyente2el la signin-->
                <div class="switch__container" id="switch-c1">
                    <h2 class="switch__title title2">Welcome Back !</h2>
                    <p class="switch__description description">Already have an account, please login with your personal info</p>
                    <button class="switch__button button switch-btn">SIGN IN</button> 
                </div>
                <!--he btkoun mawjoude had container lsignin eza ma 3endu acc bisir byef2os lfa2se wbyente2el la signup-->
                <div class="switch__container is-hidden" id="switch-c2">
                    <h2 class="switch__title title2">Hello Friend !</h2>
                    <p class="switch__description description">New here? Enter your personal details and start journey with us</p>
                    <button class="switch__button button switch-btn">SIGN UP</button>
                </div>
            </div>
        </div>
        <script src="js/signup-in.js"></script>
    </body>
</html>