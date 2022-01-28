<?php

session_start();
include './classes/class.user.php';
include("./includes/navbar.php");

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


<body>



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

<?php
include("./includes/footer.php");
?>