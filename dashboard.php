<?php
include("./function/checkLogin.php");
include("./function/dbconn.php");
include("./helpers/update_profile.php");
checkLogin();
$id = $_SESSION["login_id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Page </title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        p {
            font-size: 20px;
            font-family: 'Times New Roman';
            font-weight: bolder;
            background-color: grey;
            color: white;


        }

        body {
            background: url(./images/back10.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;

        }

        label {
            font-family: 'Gill Sans';
            font-size: 20px;
            color: black;
        }
    </style>
</head>

<body>
    <?php include("./include/header.php"); ?>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">SEND REPORT</button>
            
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
            <div class="container">
                <!-- message -->
                <?php
                if ($_SESSION["msg"] != "") {
                    echo $_SESSION["msg"];
                }
                unset($_SESSION["msg"]);
                ?>
                <!--- <form class="row g-3" action="./helpers/update_profile.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="col-md-6">
                    <?php

                    $sql = "SELECT * FROM `user` WHERE id = '$id'";
                    $res = mysqli_query($conn, $sql);
                    $data = mysqli_fetch_assoc($res);
                    ?>
<label for="inputName" class="form-label">First Name</label>
<input type="text" class="form-control" name="fname" id="inputName" required value="<?php echo $data["fname"];  ?>" placeholder="">
</div>
<div class="col-md-6">
<label for="inputName" class="form-label">Middle Name</label>
<input type="text" class="form-control" id="inputName" name="mname" required value="<?php echo $data["mname"];  ?>" placeholder="">

</div>
<div class="col-md-6">
<label for="inputName" class="form-label">Last Name</label>
<input type="text" class="form-control" id="inputName" name="lname" required value="<?php echo $data["lname"];  ?>" placeholder="">

</div>
<div class="col-md-6">
<label for="inputAddress" class="form-label">Address</label>
<input type="text" class="form-control" id="inputAddress" name="address" required value="<?php echo $data["address"];  ?>" placeholder="1234 Main St">
</div>
<div class="col-md-6">
<label for="inputEmail4" class="form-label">Email</label>
<input type="email" class="form-control" id="inputEmail4" name="email" readonly value="<?php echo $data["email"];  ?>" placeholder="joy@gmail.com">
</div>
<div class="col-md-6">
<label for="inputPhone" class="form-label">Phone number/ parent's contact</label>
<input type="text" class="form-control" id="inputPhone" name="contact" required value="<?php echo $data["contact"];  ?>" placeholder="1234">
</div>
<div class="col-md-6">
<label for="inputGender" class="form-label">Gender</label>
<select id="inputGender" class="form-select" name="gender">
    <option selected>Choose...</option>
    <option value="male" <?php echo ($data["gender"] == "male") ? "selected" : "" ?>>Male</option>
    <option value="female" <?php echo ($data["gender"] == "female") ? "selected" : "" ?>>Female</option>
</select>
</div>
<div class="col-md-6">
<label for="inputAge" class="form-label">Age</label>
<input type="number" class="form-control" name="age" required value="<?php echo $data["age"];  ?>" id="inputAge" placeholder="Your age">
</div>
<div class="col-md-6">
<label for="inputdate" class="form-label">Date-Of-Birth</label>
<input type="date" class="form-control" name="dob" required value="<?php echo $data["dob"];  ?>" id="inputCity" placeholder="dd/mm/yy">
</div>

<div class="col-md-6">
<label for="inputState" class="form-label">State</label>
<input type="text" class="form-control" name="state" required value="<?php echo $data["state"];  ?>" id="inputCity" placeholder="State">

</div>

<div class="col-12">
<button type="submit" name="update" class="btn btn-primary">Update</button>
</div>

</form>
</div>
</div>
</div> -->




                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                    <div class="container">
                        <div class="card" style="width: 100%; margin-left:auto">
                            <div class="card-body register-card-body">
                                <p class="p-3 mb-4 ">PLEASE FILL IN THIS FORM</p>



                                <form action="./helpers/submit_abuse.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">

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
                                            <option selected>Choose...</option>
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
                </div>







</body>

</html>