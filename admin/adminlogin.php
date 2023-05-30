<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 150px;
            width: 40%;
            border: 3px solid cornflowerblue;
            padding: 10px;
            border-radius: 7px;
        }

        body {
            background-image: url("./images/back8.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;

        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="container">

        <div class="row">
            <div class="col-md-6" style="width: 120%; margin-left:auto">
                <p class="fs-5; fw-bolder; p-3 mb-4 bg-primary text-white">ADMIN LOGIN PAGE</p>
                <br>
            </div>
        </div>

        <form>

            <div class="col-md-6" style="width: 100%; margin-left:auto">
                <label for="inputemail" class="form-label text-primary-emphasis fw-bolder">Email</label>
                <input type="Email" class="form-control" id="inputemail" placeholder="@gmail.com">
            </div>
            <br> <br>
            <div class="col-md-6" style="width: 100%; margin-left:auto">
                <label for="exampleInputPassword1" class="form-label text-primary-emphasis fw-bolder">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text text-body-emphasis fw-bolder">
                        Must be 8-20 characters long.
                    </span>
                </div>
            </div>
            <br> <br>

            <a class="btn btn-primary" href="index.php" role="button" type="submit">Login</a>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>