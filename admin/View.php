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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>View Page</title>
</head>

<body>
    <div class="container">
        <?php   
        $dir = '../uploads';
        $id = $_GET["id"];
        $sql = "SELECT * FROM `reports` WHERE id = '$id'";
        $res = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($res);

        ?>
        <table class="table">
            <h2 class="text-center mb-4">Report Details</h2>

            <tr>
                <th scope="col">Repoter Name</th>
                <td> <?php echo $data["name"]; ?></td>

            </tr>
            <tr>
                <th scope="col">Abuse Type</th>
                <td> <?php echo $data["abuse_type"]; ?></td>

            </tr>
            <tr>
                <th scope="col">Contact</th>
                <td> <?php echo $data["phone"]; ?></td>

            </tr>
            <tr>
                <th scope="col">What Happened</th>
                <td> <?php echo $data["what_happened"]; ?></td>

            </tr>
            <tr>
                <th scope="col">Person Involved</th>
                <td> <?php echo $data["person_involved"]; ?></td>

            </tr>
            <tr>
                <th scope="col">Where Does it Happened</th>
                <td> <?php echo $data["Where _happen"]; ?></td>

            </tr>
            <tr>
                <th scope="col">When Does it Happened</th>
                <td> <?php echo $data["When_happen"]; ?></td>

            </tr>
            <tr>
                <th scope="col">Who are present</th>
                <td> <?php echo $data["person_present"]; ?></td>

            </tr>
            <tr>
                <th scope="col">Reported to anyone</th>
                <td> <?php echo $data["told_anyone"]; ?></td>

            </tr>
            <tr>
                <th scope="col">Who are you living</th>
                <td> <?php echo $data["live_with"]; ?></td>

            </tr>
            <tr>
                <th scope="col">Living situation</th>
                <td> <?php echo $data["living_situation"]; ?></td>


            </tr>
            <tr>
                <th scope="col">additional Info</th>
                <td> <?php echo $data["additional_information"]; ?></td>

            </tr>
            <tr>
                <th scope="col">Evidence</th>
                <td> <img src="<?php echo $dir."/".$data["Evidence"];  ?>" alt="Evidence" height="200px"/> </td>


            </tr>

        </table>
    </div>


</body>

</html>