<?php
include("./dbconn.php");
session_start();

if(isset($_POST["login"])){

    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $sql = "SELECT * FROM `user` WHERE email = '$email' AND password = '$pass'";

    $res = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($res);
    if($num <= 0){
        // message
        
        $_SESSION["msg"] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
       Invalid email or password....
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
       header("location: ../adminlogin.php");

    }else{
        $_SESSION["login_id"] = $email;
        // location
        header("location: ../adminDashboard.php");
    }
}


?>