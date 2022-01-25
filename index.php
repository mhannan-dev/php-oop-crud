<?php

include('./includes/navbar.php');


?>



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



 <?php

     include('./includes/footer.php');


?>
