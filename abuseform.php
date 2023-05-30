<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABUSE FORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 40px;
            width: 40%;
            border: 3px solid cornflowerblue;
            padding: 10px;
            border-radius: 7px;
        }

        .body {
            background-image: url("./images/back1.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;

        }
    </style>
</head>

<body class="hold-transition sexualassault-page">
    <div class="container">

        <div class="card" style="width: 100%; margin-left:auto">
            <div class="card-body register-card-body">
                <p class="fs-5; fw-bolder; p-3 mb-4 bg-primary text-white">PLEASE FILL IN THIS FORM</p>


                <form>
                    <div class="row mb-3" style="width: 100%; margin-left:auto">
                        <label for="exampleFormControlTextarea1" class="form-label text-primary-emphasis">Can you describe what happened?</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                        <div id="textarea1" class="form-text text-body-emphasis"></div>
                    </div>

                    <div class="row mb-3" style="width: 100%; margin-left:auto">
                        <label for="exampleFormControlTextarea1" class="form-label text-primary-emphasis">Can you describe the person involved?</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <div id="textarea1" class="form-text text-body-emphasis"></div>
                    </div>

                    <div class="row mb-3" style="width: 100%; margin-left:auto">
                        <label for="exampleFormControlTextarea1" class="form-label text-primary-emphasis">Where did this happen?</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <div id="textarea1" class="form-text text-body-emphasis"></div>
                    </div>

                    <div class="row mb-3" style="width: 100%; margin-left:auto">
                        <label for="exampleFormControlTextarea1" class="form-label text-primary-emphasis">When did this happen?</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <div id="textarea1" class="form-text text-body-emphasis"></div>
                    </div>

                    <div class="row mb-3" style="width: 100%; margin-left:auto">
                        <label for="exampleFormControlTextarea1" class="form-label text-primary-emphasis">Where there any other people present at the time? </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <div id="textarea1" class="form-text text-body-emphasis"></div>
                    </div>

                    <div class="row mb-3" style="width: 100%; margin-left:auto">
                        <label for="exampleFormControlTextarea1" class="form-label text-primary-emphasis">Have you told anyone else about what happened?</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <div id="textarea1" class="form-text text-body-emphasis"></div>
                    </div>

                    <div class="row mb-3" style="width: 100%; margin-left:auto">
                        <label for="exampleFormControlTextarea1" class="form-label text-primary-emphasis">Who do you live with?</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                        <div id="textarea1" class="form-text text-body-emphasis"></div>
                    </div>

                    <div class="row mb-3" style="width: 100%; margin-left:auto">
                        <label for="exampleFormControlTextarea1" class="form-label text-primary-emphasis">Explain your living situation?</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                        <div id="textarea1" class="form-text text-body-emphasis"></div>
                    </div>


                    <div class="row mb-3" style="width: 100%; margin-left:auto">
                        <label for="exampleFormControlTextarea1" class="form-label text-primary-emphasis">Any additional information you think would be helpful for the investigation?</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                        <div id="textarea1" class="form-text text-body-emphasis"></div>
                    </div>

                    <div class="row mb-3" style="width: 100%; margin-left:auto">
                        <label for="exampleInputFile" class="form-label text-primary-emphasis">Any evidence(picture etc)?</label>
                        <input type="file" class="form-control" id="myfile" name="myfile" aria-describedby="fileHelp">
                        <div id="fileHelp" class="form-text text-body-emphasis"></div>
                    </div>



                    <a class="btn btn-primary" href="reportabuse.php" role="button" type="submit">Submit form</a>

                </form>
            </div>
        </div>

</body>

</html>
<form class="row g-3" action="./helpers/update_profile.php" method="post">
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
    </div>