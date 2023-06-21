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
        header("Location: errors-success/used-email.html");
        exit;
    }
    else{
        $quary2="INSERT INTO user (full_name, email, password, role_id) VALUES ('$user','$email','$pass',2)";
        $res2=mysqli_query($con,$quary2);
        if($res2){
            session_start();
            $_SESSION['username']=$user;
            $_SESSION['email']=$email;
            
            header("Location: errors-success/signup1-success.html");
            exit;
        }
        else {
            header("Location: errors-success/error.html");
            exit;
        }
    }
}
 else {
  header("Location: errors-success/error.html");
        exit;
}
?>