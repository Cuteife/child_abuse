<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stop Child Abuse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<style>
    .container{
        margin-top:50px;
        width:40%;
        border: 1px solid cornflowerblue;
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
<body class="hold-transition register-page">
<div class="container">

<div class="card" style="width: 100%; margin-left:auto">
    <div class="card-body register-card-body">
      <p class="fs-5; fw-bolder; p-3 mb-4 bg-primary text-white">REGISTER NEW CHILD</p>

<form>
        <div class="row">
        <div class="col mb-2">
        <div class="input-group mb-4">
        <label for="inputname1" class="form-label"> Name: </label>
        </div>
        </div>
      </div>
        <div class="col mb-2">
        <div class="input-group mb-4">
          <input type="text" class="form-control" placeholder="First Name ">
          <div class="input-group-append">
           <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col mb-2">
        <div class="input-group mb-4">
          <input type="text" class="form-control" placeholder=" Middle Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder=" Last Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
      </div>
        <div class="row mb-6">
        <div class="input-group mb-4">
        <label for="inputaddress" class="form-label" >Address</label>
          <input type="text" class="form-control" placeholder="- type in your address ">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-address-card"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-6">
        <div class="input-group mb-3">
        <label for="inputemail" class="form-label">Email Address</label>
          <input type="email" class="form-control" placeholder=" example@gmail.com ">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
      </div>
        <div class="row mb-1">
        <div class="input-group mb-4">
        <label for="inputephone" class="form-label">Phone number/ Parent's contact</label>
          <input type="text" class="form-control" placeholder="1234 ">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
      </div>
        <div class="col mb-4">
        <label for="inputgender" class="form-label">Gender</label>
          <select class="form-control" placeholder="Select Gender">
                          <option>Male</option>
                          <option>Female</option>
          </select>
      </div>
      <div class="row mb-2">
      <div class="input-group mb-3">
        <label for="inputage" class="form-label">Age</label>
          <input type="number" class="form-control" placeholder="Your age ">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-2">
        <div class="input-group mb-3">
        <label for="inputdate" class="form-label">Date-Of-Birth</label>
          <input type="date" class="form-control" placeholder="dd/mm/yy">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
      </div>

    
        <div class="row mb-4">
        <div class="input-group mb-3">
        <label for="inputusername" class="form-label">User name</label>
          <input type="text" class="form-control" placeholder="-Preferred Username - ">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
      </div>
       <div class="row mb-4">
        <div class="input-group mb-3">
        <label for="inputpassword" class="form-label">Password</label>
          <input type="password" class="form-control" placeholder="Preferred password" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
      </div>
      <!--<div class="col-4">
        <div class="input-group mb-3">
          <input type="file" />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
      </div>-->
      
      <style type="text/css">
      label{
          display: inline-block;
          background-color: steelblue;
          color: whitesmoke;
          padding: 0.5rem;
          font-family: sans-serif;
          border-radius: 0.3rem;
          cursor: pointer;
          margin-top: 1rem;
        }
      </style>
      
          <!-- /.col -->
          <div class="col-12">
            <a class="btn btn-primary" style="margin-left: 1%;margin-top: 20px;" href="index.php" role="button" type="submit">Register</a>
          </div>
          <!-- /.col -->
        </div>
        </div>
      </form>

      <a href="login.php" class="text-left" style="margin-left:1%;">I already have an account</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
    
</body>
</html>