<?php

include_once 'class.user.php';
$user = new User(); // Check user logged in or not

if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    $register = $user->reg_user($fullname, $uname, $upass, $uemail);
    if ($register) {
        // Registration Success
        echo 'Registration successful <a href="login.php">Click here</a> to login';
    } else {
        // Registration Failed
        echo 'Registration failed. Email or Username already exits please try again';
    }
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

    <style>
        #container {
            width: 400px;
            margin: 0 auto;
        }
    </style>

    <script type="text/javascript" language="javascript">
        function submitreg() {
            var form = document.reg;
            if (form.name.value == "") {
                alert("Enter name.");
                return false;
            } else if (form.uname.value == "") {
                alert("Enter username.");
                return false;
            } else if (form.upass.value == "") {
                alert("Enter password.");
                return false;
            } else if (form.uemail.value == "") {
                alert("Enter email.");
                return false;
            }
        }
    </script>
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
                        <a class="nav-link" href="login.php">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="registration.php">Register</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <!-- navbar end -->

    <!-- start registration section -->


    <div class="container">
        <div class="row" style="max-width: 602px; margin: 0 auto;">
            <h1>Registration Here</h1>
            <form action="" method="post" name="reg">
                <div class="mb-3">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text" name="fullname" placeholder="Full Name" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="uname" class="form-label">Last Name</label>
                    <input type="text" name="uname" placeholder="User Name" class="form-control">
                </div>
                <!-- <div class="mb-3">
                                    <label for="uname" class="form-label">User Name</label>
                                    <input type="text" name="uname" placeholder="user Name" class="form-control">
                                </div> -->

                <div class="mb-3">
                    <label for="uemail" class="form-label">Email</label>
                    <input type="email" name="uemail" class="form-control" placeholder="Enter Email">
                </div>

                <div class="mb-3">
                    <label for="upassword" class="form-label">Password</label>
                    <input type="password" name="upass" placeholder="Password" class="form-control">
                </div>

                <!-- <div class="mb-3">
                                    <label for="cpassword" class="form-label">Confirm Password</label>
                                    <input type="password" name="cpassword" placeholder="Confirm Password" class="form-control">
                                </div> -->
                <input onclick="return(submitreg());" type="submit" name="submit" class="btn btn-success" value="Register"></input>
                <p class="float-end"><span class="p-3">Already Have an account?</span><a href="login.php">Login</a></p>
            </form>
        </div>
    </div>



</body>





<!-- footer -->

<footer class="bg-light text-center text-lg-start pt-5">

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright: Jahid Hasan
        <a class="text-primary" href="https://www.google.com.com/">Google</a>
    </div>

</footer>
<!-- end footer -->






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<script>
    // $(function(){
    //     alert('working')
    // }
    // )
</script>

</body>

</html>