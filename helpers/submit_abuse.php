<?php
// error_reporting(0);

$dir = '../uploads';
include("../function/dbconn.php");
session_start();
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $abuse_type = $_POST["abuse_type"];
    $what_happened = $_POST["what_happened"];
    $person_involved= $_POST["person_involved"];
    $Where_happen = $_POST["Where_happen"];
    $When_happen = $_POST["When_happen"];
    $person_present = $_POST["person_present"];
    $told_anyone = $_POST["told_anyone"];
    $live_with = $_POST["live_with"];
    $living_situation = $_POST["living_situation"];
    $additional_information = $_POST["additional_information"];
    $Evidence = rand(10, 1000)."-".$_FILES["Evidence"]["name"];
    $local = $_FILES["Evidence"]["tmp_name"];
    move_uploaded_file($local, $dir . '/' . $Evidence);

    $sql = "INSERT INTO `reports`(`name`, `phone`, `abuse_type`, `what_happened`, `person_involved`, `Where _happen`, `When_happen`, `person_present`, `told_anyone`, `live_with`, `living_situation`, `additional_information`, `Evidence`) VALUES ('$name','$phone','$abuse_type','$what_happened','$person_involved','$Where_happen','$When_happen','$person_present','$told_anyone','$live_with','$living_situation','$additional_information','$Evidence')";
    $res =  mysqli_query($conn, $sql);
    if($res){
        $_SESSION["msg"] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Report submitted successfully...........
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
       header("location: ../reportabuse.php");

    }else{
        $_SESSION["msg"] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Report not submitted.....
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
       header("location: ../reportabuse.php");

    }

}
