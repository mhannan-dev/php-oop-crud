<?php

session_start();
include './classes/class.user.php';
$user = new User();
$uid = $_SESSION['uid'];
if (!$user->get_session()) {
    header("location:login.php");
}

if (isset($_GET['q'])) {
    $user->user_logout();
    header("location:login.php");
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP oop login reg system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- custome css -->
</head>

<body>

    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid nav-color">
            <a class="navbar-brand" href="index.php">Login & Register system using PHP </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">


                    <li class="nav-item">
                        <h1>Hello <?php $user->get_fullname($uid); ?></h1>
                        <a class="nav-link" href="home.php?q=logout">LOGOUT</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <!-- navbar end -->



    <div class=" card container-fluid">
        <div class=" card-heading text-center">
            <h2 class="mt-3"><strong>Welcome!</strong> Jahid</h2>
        </div>

        <div class="card-body">
            <table class="table table-striped">

                <tr>
                    <th style="width:20%">Serial</th>
                    <th style="width:20%">Name</th>
                    <th style="width:20%">Username</th>
                    <th style="width:20%">Email</th>
                    <th style="width:20%">Action</th>
                </tr>


                <tr>
                    <th scope="row">01</th>
                    <td>Jahid Hasan</td>
                    <td>shiplo</td>
                    <td>shiplo@gmail.com</td>
                    <td><a href="profile.php?id=1" class="btn btn-success">View</a></td>
                </tr>
                <tr>
                    <th scope="row">02</th>
                    <td>Masum khan</td>
                    <td>masum</td>
                    <td>masum@gmail.com</td>
                    <td><a href="profile.php?id=2" class="btn btn-success">View</a></td>
                </tr>
                <tr>
                    <th scope="row">03</th>
                    <td>Shakil Hasan</td>
                    <td>shakil</td>
                    <td>shakil@gmail.com</td>
                    <td><a href="profile.php?id=3" class="btn btn-success">View</a></td>
                </tr>

            </table>
        </div>
    </div>
</body>


<?php

 include './includes/footer.php';

?>