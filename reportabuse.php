<?php
error_reporting(0);
include("./helpers/submit_abuse.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Report Abuse</title>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <style>
    .container {
      margin-top: 50px;
      width: 50%;
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

    /* label {
      color: whitesmoke;
      padding: 8px
    } */
  </style>
</head>

<body class="hold-transition abuse-page">


  <div class="container">
    <!-- message -->
    <?php
    if ($_SESSION["msg"] != "") {
      echo $_SESSION["msg"];
    }
    unset($_SESSION["msg"]);
    ?>
    <div class="card" style="width: 100%; margin-left:auto">
      <div class="card-body register-card-body">
        <p class="p-3 mb-4 ">PLEASE FILL IN THIS FORM</p>



        <form action="./helpers/submit_abuse.php" method="post" enctype="multipart/form-data">


          <div class="col-md-12" style="width: 100%; margin-left:auto">
            <label for="exampleInputName" class="form-label">Reporter Name</label>
            <input type="text" class="form-control" id="exampleInputName" name="name" placeholder="Enter Name">

          </div>
          <br>

          <div class="col-md-12" style="width: 100%; margin-left:auto">
            <label for="exampleInputPhone" class="form-label">Reporter Phone Number</label>
            <input type="text" class="form-control" placeholder="1234 " name="phone">
          </div>
          <br>

          <div class="col-md-12">
            <label for="inputabuse" class="form-label">Type of Abuse</label>
            <select id="inputabuse" class="form-select" name="abuse_type">
              <option selected disabled>Choose...</option>
              <option value="NEGLECT (BASIC NEEDS)">NEGLECT (BASIC NEEDS)</option>
              <option value="SEXUAL ASSAULT (MOLESTATION)">SEXUAL ASSAULT (MOLESTATION)</option>
              <option value="PHYSICAL ABUSE (DOMESTIC)">PHYSICAL ABUSE(DOMESTIC)</option>
            </select>
          </div>
          <br>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Can you describe what happened?</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="what_happened"></textarea>
          </div>
          <br>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Can you describe the person involved?</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="person_involved"></textarea>
          </div>
          <br>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Where did this happen?</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="Where_happen"></textarea>
          </div>
          <br>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">When did this happen?</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="When_happen"></textarea>
          </div>
          <br>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Where there any other person present at the time?</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="person_present"></textarea>
          </div>
          <br>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Have you told anyone else about what happened?</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="told_anyone"></textarea>
          </div>
          <br>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Who do you live with?</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="live_with"></textarea>
          </div>
          <br>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Explain your living situation?</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="living_situation"></textarea>
          </div>
          <br>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Any additional information you think would be helpful for the investigation?</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="additional_information"></textarea>
          </div>
          <br>

          <div class="mb-3">
            <label for="exampleInputFile" class="form-label">Any Evidence?</label>
            <input type="file" class="form-control" id="myfile" aria-describedby="fileHelp" name="Evidence">
            <div id="fileHelp" class="form-text text-body-emphasis"></div>
          </div>
          <br>


          <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </div>

        </form>
      </div>
    </div>
  </div>


</body>

</html>