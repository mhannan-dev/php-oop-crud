<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php login registration system</title>
    <!-- bootstrap-5 -->
    <link rel="stylesheet" href="inc/bootstrap.min.css">
    <!-- custome css -->
    <link rel="stylesheet" href="style/style.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- jquery -->
    <script src="inc/jquery.min.js"></script>

    <!-- js -->
    <script src="inc/bootstrap.min.js"></script>
    <script src="inc/popper.min.js"></script>
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
                        <a class="nav-link active" aria-current="page" href="Profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Register.php">Register</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- navbar end -->

    <!-- body -->
    <div class=" card container-fluid">
        <div class=" card-heading text-center">
            <h2> User List <span><strong>Welcome!</strong> Jahid</span>
            </h2>
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
                        <th scope="row">1</th>
                        <td>Jahid Hasan</td>
                        <td>shiplo</td>
                        <td>shiplo@gmail.com</td>
                        <td class="btn btn-primary">View</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                
            </table>
        </div>
    </div>
    <!-- endbody -->



    <!-- footer -->

    <footer class="bg-light text-center text-lg-start">

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright: Jahid Hasan
            <a class="text-primary" href="https://www.google.com.com/">Google</a>
        </div>

    </footer>
    !-- end footer -->
</body>

</html>