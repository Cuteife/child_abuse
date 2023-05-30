<?php
error_reporting(0);
include("../function/dbconn.php");
session_start();
if(isset($_POST["update"])){
    $fname = $_POST["fname"];
    $mname = $_POST["mname"];
    $lname = $_POST["lname"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $dob = $_POST["dob"];
    $id = $_POST["id"];
    $state = $_POST["state"];
    $password = $_POST["password"];

    $sql = "UPDATE `user` SET `fname`= '$fname',`mname`= '$mname',`lname`='$lname',`address`= '$address',`email`='$email',`contact`= '$contact',`gender`='$gender',`age`='$age',`dob`='$dob',`state`='$state' WHERE id = '$id'";
    $res = mysqli_query($conn, $sql);
    if($res){
        $_SESSION["msg"] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
       Updated successful...........
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        header("location: ../dashboard.php");

    }else{
        $_SESSION["msg"] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Oooops, something went wrong.....
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
        header("location: ../dashboard.php");

    }
}




?>