<?php
require_once 'connection.php';
if (isset($_POST['user'])&&$_POST['user']!="" && isset($_POST['pass'])&&$_POST['pass']!="" && isset($_POST['email'])&&$_POST['email']!="") {
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $email=$_POST['email'];
    $quary="SELECT * FROM user where email='$email'";
    $res=mysqli_query($con,$quary);
    $nbrows=mysqli_num_rows($res);
    if ($nbrows==1) {
        // Show message and redirect after 1.5 seconds
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
        echo '<div class="message">This email is already being used.</div>';
        echo '<script>
                setTimeout(function() {
                    window.location.href = "signup-in.php";
                }, 1500);
              </script>';
        exit;
    }
    else{
        $quary2="INSERT INTO user (full_name, email, password, role_id) VALUES ('$user','$email','$pass',2)";
        $res2=mysqli_query($con,$quary2);
        if($res2){
            session_start();
            $_SESSION['username']=$user;
            $_SESSION['email']=$email;
            
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
            echo '<div class="message">You are almost there only 1 step left.</div>';
            echo '<script>
                    setTimeout(function() {
                      window.location.href = "resume-signup.php";
                    }, 1500);
                  </script>';
            exit;
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
    }
}else {
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