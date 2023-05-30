<?php
include("./helpers/auth.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stop Child Abuse</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <style>
    .container {
      margin-top: 50px;
      width: 40%;
      border: 1px solid cornflowerblue;
      padding: 10px;
      border-radius: 7px;
    }

    body {
      background-image: url("./images/ab5.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;

    }

    label {
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
</head>

<body class="hold-transition register-page">
  <div class="container">

    <div class="card" style="width: 100%; margin-left:auto">
      <!-- message -->
      <?php
      if ($_SESSION["msg"] != "") {
        echo $_SESSION["msg"];
      }
      unset($_SESSION["msg"]);
      ?>

      <div class="card-body register-card-body">
        <p class="fs-5; fw-bolder; p-3 mb-4 bg-primary text-white">REGISTER NEW CHILD</p>

        <form action="./helpers/auth.php" method="post">
          <div class="row">
          </div>
          <div class="col mb-2">
            <div class="input-group mb-4">
              <label for="inputname1" class="form-label"> First Name </label>
              <input type="text" class="form-control" name="fname" placeholder="">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-2">
            <div class="input-group mb-4">
              <label for="inputname2" class="form-label"> Middle Name </label>
              <input type="text" class="form-control" name="mname" placeholder=" ">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="input-group mb-3">
              <label for="inputname3" class="form-label"> Last Name </label>
              <input type="text" class="form-control" name="lname" placeholder="">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-6">
            <div class="input-group mb-4">
              <label for="inputaddress" class="form-label">Address</label>
              <input type="text" class="form-control" name="address" placeholder="- type in your address ">
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
              <input type="email" class="form-control" name="email" placeholder=" example@gmail.com ">
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
              <input type="text" class="form-control" name="contact" placeholder="1234 ">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-phone"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <label for="inputgender" class="form-label">Gender</label>
            <select class="form-control" placeholder="Select Gender" name="gender">
              <option select disabled>Select</option>
              <option value="male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
          <div class="row mb-2">
            <div class="input-group mb-3">
              <label for="inputage" class="form-label">Age</label>
              <input type="number" class="form-control" placeholder="Your age " name="age">
              <div class="input-group-append">
                <div class="input-group-text">
                </div>
              </div>
            </div>
          </div>

          <div class="row mb-2">
            <div class="input-group mb-3">
              <label for="inputdate" class="form-label">Date-Of-Birth</label>
              <input type="date" class="form-control" placeholder="dd/mm/yy" name="dob">
              <div class="input-group-append">
                <div class="input-group-text">
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-2">
            <div class="input-group mb-3">
              <label for="inputdate" class="form-label">State</label>
              <input type="text" class="form-control" placeholder="State" name="state">
              <div class="input-group-append">
                <div class="input-group-text">
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="input-group mb-3">
              <label for="inputpassword" class="form-label">Password</label>
              <input type="password" class="form-control" placeholder="Preferred password" name="password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-12">
            <input type="submit" class="btn btn-primary" name="register" value="Signup">
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>