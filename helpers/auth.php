<?php
error_reporting(0);
include("../function/dbconn.php");
session_start();
if(isset($_POST["register"])){
    $fname = $_POST["fname"];
    $mname = $_POST["mname"];
    $lname = $_POST["lname"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $dob = $_POST["dob"];
    $state = $_POST["state"];
    $password = $_POST["password"];

    $sql = "INSERT INTO `user`(`fname`, `mname`, `lname`, `address`, `email`, `contact`, `gender`, `age`, `dob`,`state`, `password`) VALUES ('$fname', '$mname', '$lname', '$address', '$email', '$contact', '$gender','$age', '$dob', '$state','$password')";
    $res = mysqli_query($conn, $sql);
    if($res){
        $_SESSION["msg"] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
       Registration successful...........
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        header("location: ../index.php");

    }else{
        $_SESSION["msg"] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Oooops, something went wrong.....
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
        header("location: ../register.php");

    }
}


// handling login

if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sq = "SELECT * FROM `user` WHERE email = '$email' AND password = '$password'";
    $res = mysqli_query($conn,$sq);
    $row = mysqli_num_rows($res);

    if($row > 0){
        $data = mysqli_fetch_assoc($res);
        $_SESSION["login_id"] = $data["id"];
        header("location: ../index.php");
    }else{
        $_SESSION["msg"] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Wrong email or password....
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
        header("location: ../login.php");

    }
}
