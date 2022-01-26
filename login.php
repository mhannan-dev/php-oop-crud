<?php

session_start();
include_once 'class.user.php';
$user = new User();

if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    $login = $user->check_login($emailusername, $password);
    if ($login) {
        // Registration Success
        header("location:home.php");
    } else {
        // Registration Failed
        echo 'Wrong username or password';
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
        function submitlogin() {
            var form = document.login;
            if (form.emailusername.value == "") {
                alert("Enter email or username.");
                return false;
            } else if (form.password.value == "") {
                alert("Enter password.");
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



    <!-- login -->

    <div class="container">
        <div class="row" style="max-width: 602px; margin: 0 auto;">

            <h1>Login</h1>
            <form action="" method="post" name="login">
                <div class="mb-2">
                    <label for="emailusername" class="form-label">Username or Email</label>
                    <input type="text" class="form-control" name="emailusername" placeholder="username or email" id="emailusername" aria-describedby="emailusername">
                    <div id="emailusername" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="password" name="password" id="Password">
                </div>

                <div class="mb-3">
                    <input onclick="return(submitlogin());" type="submit" name="submit" value="login" class="btn btn-success "></input>
                    <a href="#" class="float-end">Forgot password?</a>
                </div>

                <div class="mb-3">
                    <a href="registration.php">Register new user</a>
                </div>
            </form>
        </div>
    </div>


    <!-- end -->
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