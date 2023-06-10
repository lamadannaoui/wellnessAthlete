<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['email'])){
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    echo '
    <!DOCTYPE html>
    <html lang="es" dir="ltr">
        <head>
            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
            <meta charset="utf-8">
            
            <!-- kermel ldesign w font mn google -->
            <link rel="stylesheet" type="text/css" href="css/signup-r.css">
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
            
            <title>WA_signup</title>
        </head>
        <body>
            <!-- 3emel container kbire b2alba 4 z8ar wahde lal BMI calculation and wahde lal medical history wl place wgoal w 2 kermel yetna2al bayneton -->
            <div class="main">
                
                <!-- hed container kermel l BMI -->
                <div class="container a-container" id="a-container">
                    <form class="form" id="a-form" method="post" action=""><!--l action mawjoude bteni form la2an hewe lezem yekhod ma3lumet li b2alb l 2 forms-->
                        <h2 class="form_title title">Calculate your BMI</h2>
                        <!-- 3melet kaza div la zabet chway bldesign wma 3a2ed lcode ktir -->
                        <div class="w-h" style="display: flex;"> 
                            <input class="form__input" type="number" name="weight" placeholder="weight in kg" min="30">
                            <input class="form__input" type="number" name="height" placeholder="height in cm" min="100">
                        </div>
                        <div class="a-g" style="display: flex; margin-top: 50px;">
                            <input class="form__input" type="number" name="age" placeholder="age">
                            <div class="gender">
                                <h3>Gender</h3>
                                <input type="radio" name="gender" value="male" style="margin-left: 20px; margin-top: 7px;">
                                <label for="male">male</label>
                                <input type="radio" name="gender" value="female" style="margin-left: 15px; margin-top: 7px;">
                                <label for="female">female</label>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- he container kermel lmedical history wl preffered exercise place wl goal -->
                <div class="container b-container" id="b-container">
                    <form class="form" id="b-form" method="post" action="process-resume-signup.php"><!-- hon bas yruh 3al process... hayekhod ma3lumet lforms l 2 -->
                        <div style="width: 300px; background-color: #0a460e; height: 30px; align-items: center; justify-content: center;display: flex; color: #f9f9f9; margin-bottom: 10px;">
                            <h3>Medical History</h3>
                        </div>
                        <textarea name="medical-history" id="MH" cols="45" rows="10" style="width: 300px;"></textarea>
                        <div style="width: 300px; background-color: #0a460e; height: 30px; align-items: center; justify-content: center;display: flex; color: #f9f9f9; margin-top: 10px; margin-bottom: 3px;">
                            <h3>Fitness Goal</h3>
                        </div>
                        <div style="width: 300px; height: 30px; align-items: center; justify-content: center; display: flex; color: black; margin-bottom: 10px; font-weight: 700; gap: 2px;">
                            <input type="radio" name="goal" value="L-w"><label for="L-w">Lose weight</label>
                            <input type="radio" name="goal" value="G-w"><label for="G-w">gain weight</label>
                            <input type="radio" name="goal" value="K"><label for="K">keep in shape</label>
                        </div>
                        <div style="width: 300px; background-color: #0a460e; height: 30px; align-items: center; justify-content: center;display: flex; color: #f9f9f9; margin-top: 10px; margin-bottom: 3px;">
                            <h3>Preferred Exercise Place</h3>
                        </div>
                        <div style="width: 300px; height: 30px; align-items: center; justify-content: center; display: flex; color: black; margin-bottom: 10px; font-weight: 700; gap: 2px;">
                            <input type="radio" name="Place" value="Gym"><label for="Gym" style="margin-right: 50px;">Gym</label>
                            <input type="radio" name="Place" value="Home"><label for="Home">Home</label>
                        </div>
                        <input type="submit" value="Signup">
                    </form>
                </div>
                
                <!-- hol mtl container z8ire kermel yente2el ben l BMI wlbe2yin -->
                <div class="switch" id="switch-cnt">
                    <div class="switch__circle"></div>
                    <div class="switch__circle switch__circle--t"></div>
                    <!-- he bteji had container l BMI kermel bas ykhales yef2os lfa2se wyene2lou lal medical history etc -->
                    <div class="switch__container" id="switch-c1">
                        <h2 class="switch__title title">Almost there!</h2>
                        <p class="switch__description description">Enter you height, weight, age and gender to calculate your BMI and then press the button below to go to the next step</p>
                        <button class="switch__button button switch-btn">NEXT</button>
                    </div>
                    <!-- he bteji had container l medical history kermel eza luser 8alat bchi aw kan bedu yet2akad mn lechya li 7ata bl BMI bisir byef2os lfa2se layraj3u 3al BMI wlma3loumet mabtrou7 lahadid ma yef2os signup ya3ni fi y3adel 3layon ad ma bedu abl ma yef2os signup -->
                    <div class="switch__container is-hidden" id="switch-c2">
                        <h2 class="switch__title title">Did a mistake?</h2>
                        <p class="switch__description description">Did you forgot somthing or think you made a mistake? You can press the button below to go back and edit your information</p>
                        <button class="switch__button button switch-btn">BACK</button>
                    </div>
                </div>
            </div>
            <script src="js/signup-r.js"></script>
        </body>
    </html>
    ';
}
else {
    echo '<style>
            .message {
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: #f8f8f8;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                text-align: center;
            }
          </style>';
    echo '<div class="message">Something went wrong please try again.</div>';
    echo '<script>
            setTimeout(function() {
              window.location.href = "signup-in.php";
            }, 1500);
          </script>';
    exit;
}
?>