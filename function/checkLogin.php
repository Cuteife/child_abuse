<?php
session_start();
function checkLogin(){
    if($_SESSION["login_id"] == ""){
        $_SESSION["msg"] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Please Login...
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
        header("location: ./login.php");
        
    }
}



?>