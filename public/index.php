<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP oop login reg system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- custome css -->
    <link rel="stylesheet" href="css/style.css">
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
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#login">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#register">Register</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- navbar end -->



    <!-- alert -->
    <div class="alert alert-success" role="alert" style="max-width: 650px; margin:0 auto;">
        <h1>Jahid Hasan</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut exercitationem vero laborum, laboriosam illo ullam ad animi ab voluptatum assumenda pariatur sunt distinctio harum quidem asperiores possimus saepe mollitia! Officia!</p>
        <a href="#" data-bs-toggle="modal" data-bs-target="#register" class="btn btn-primary">Go somewhere</a>
    </div>
    <!-- alert end -->

    <!-- login -->
    <!-- Modal -->
    <div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row" style="max-width: 602px; margin: 0 auto;">
                            <form class="form" action="auth.php" method="post">
                                <div class="mb-2">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" name="email" id="Email" aria-describedby="emailHelp">
                                    <div id="emailHelp1" class="form-text">We'll never share your email with anyone else.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="Password">
                                </div>
                                
                                <div class="mb-3">
                                <button type="submit" class="btn btn-success float-start">Login</button>
                                <a href="#"data-bs-toggle="modal" data-bs-target="#reset-password" class="float-end text-decoration-none" >Forgot password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- end -->

    <!-- registration -->
    <!-- Modal -->
    <div class="modal fade" id="register" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="registerLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerLabel">Register</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row" style="max-width: 602px; margin: 0 auto;">
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name">
                                </div>

                                <div class="mb-3">
                                    <label for="uname" class="form-label">User Name</label>
                                    <input type="text" name="uname" class="form-control" id="uname">
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="email">
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="Password">
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label"> Confirm Password</label>
                                    <input type="password" name="password" class="form-control" id="Password">
                                </div>
                                <button type="submit" name="register" class="btn btn-success">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <!-- reset-password -->
    <!-- Modal -->
    <div class="modal fade" id="reset-password" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="reset-passwordLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reset-passwordLabel">Reset Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row" style="max-width: 602px; margin: 0 auto;">
                            <form action="" method="POST">
                                <div class="mb-2">
                                    <label for="email1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp1" required>
                                    
                                </div>
                                <button type="submit" class="btn btn-success">Send password link</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- end -->






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