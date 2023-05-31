<?php
error_reporting(0);
include("./function/checkLogin.php");
include("./function/dbconn.php");
include("./function/auth.php");
checkLogin();
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
        /* p {
            font-size: 20px;
            font-family: 'Times New Roman';
            font-weight: bolder;
            background-color: grey;
            color: white;


        } */
    </style>


</head>

<body>
    <p>Admin Dashboard Page</p>
    <ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-top: 30px;">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Profile</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Abuse</button>
        </li>
        <li class="nav-item" role="presentation">
            <a href="./function/logout.php" class="nav-link" style="color: red;" type="button">Logout</a>
        </li>

    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            Handle here, follow the process used before
        </div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

            <div class="" style="margin-top: 30px;">
                <?php
                $sql = "SELECT * FROM `reports`";
                $res = mysqli_query($conn, $sql);
                $num  = mysqli_num_rows($res);
                if ($num <= 0) {
                    echo "No report found";
                } else {
                ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Report Type</th>
                                <th scope="col">Reporter Name</th>
                                <th scope="col">Report Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            while ($data = mysqli_fetch_assoc($res)) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><?php echo $data["abuse_type"]; ?></td>
                                    <td><?php echo $data["name"]; ?></td>
                                    <td><?php echo $data["reported_at"]; ?></td>
                                    <td> <a href="./View.php?id=<?php echo $data["id"];  ?>">View</a> </td>

                                </tr>
                            <?php
                                $i++;
                            }
                            ?>

                        </tbody>
                    </table>

                <?php
                }

                ?>

            </div>
        </div>
    </div>

</body>

</html>