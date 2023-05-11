<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save a Child | Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
    .container{
        margin-top:40px;
        width:40%;
        border: 3px solid cornflowerblue;
        padding:10px;
        border-radius:7px;
    }
    body{
    background-image: url("./images/ab5.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;

}
</style>
</head>
<body class="hold-transition login-page" >
    <div class="container">

    <div class="row" >
    <div class="col-md-6" style="width: 100%; margin-left:auto">
    <p class="fs-5; fw-bolder; p-3 mb-4 bg-primary text-white">LOGIN PAGE</p>
        <br>
      </div>
    </div>
<form >
  <div class="row mb-3" style="width: 100%; margin-left:auto">
    <label for="exampleInputEmail1" class="form-label text-primary-emphasis">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  <div id="emailHelp" class="form-text text-body-emphasis">Enter your email address.</div>
  </div>
  <div class="row mb-3" style="width: 100%; margin-left:auto">
    <label for="exampleInputPassword1" class="form-label text-primary-emphasis">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
    <div class="col-auto">
    <span id="passwordHelpInline" class="form-text text-body-emphasis">
      Must be 8-20 characters long.
    </span>
  </div>
  </div>
  <div class="mb-3 form-check text-primary-emphasis" style="width: 100%; margin-left:auto">
    Don't have account ? <a href="register.php">Register</a> 
  </div>
  <a class="btn btn-primary" href="index.php" role="button" type="submit">Login</a>
  
</form>
    </div>


</body>
</html>
