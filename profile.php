<?php

include('./includes/navbar.php');


?>


    <!-- alert -->
    <div class="alert alert-success" role="alert" style="max-width: 80%; margin:0 auto;">
        <h1>Welcome</h1>
        <p>Jahid Hasan</p>

    </div>
    <!-- alert end -->



    <!-- change pass form -->
    <div class="row">
        <div class="col-md-6 col-lg-4" style="margin: 0 auto;">
            <form action="" method="POST">
                <h1>Change Password</h1>
                <div class="mb-3">
                    <label for="password" class="form-label">New Password</label>
                    <input type="password" name="password" class="form-control" id="Password">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label"> Confirm Password</label>
                    <input type="password" name="password" class="form-control" id="Password">
                </div>

                <button type="submit" name="change-password" class="btn btn-success">Change Password</button>
            </form>
        </div>
    </div>
    <!-- end -->



    <!-- change-pass -->
    <!-- Modal -->
    <div class="modal fade" id="change-pass" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="change-passLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="change-passLabel">Change Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row" style="max-width: 602px; margin: 0 auto;">
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="password" class="form-label">Old Password</label>
                                    <input type="password" name="password" class="form-control" id="Password">
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">New Password</label>
                                    <input type="password" name="password" class="form-control" id="Password">
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label"> Confirm Password</label>
                                    <input type="password" name="password" class="form-control" id="Password">
                                </div>

                                <button type="submit" name="register" class="btn btn-success">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- end change-pass -->
    </div>
    </div>









    <?php

include('./includes/footer.php');


?>