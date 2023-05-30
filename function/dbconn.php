<?php
$local = "localhost";
$user  = "root";
$pass = "";
$db = "child_abuse";

$conn = mysqli_connect($local,$user,$pass,$db);
if(!$conn){
    echo "Not connected".mysqli_connect_error();
}

?>