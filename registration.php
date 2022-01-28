<?php

include './classes/class.user.php';
include './includes/navbar.php';
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

<?php
include("./includes/footer.php");
?>