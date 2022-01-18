<?php

include "inc/navbar.php";

?>



<div class="container">

<div class="heading text-center">
        <h1>User Registration</h1>
    </div>
    <div class="row" style="max-width: 602px; margin: 0 auto;">
        <form>
            <div class="mb-3">
                <label for="fname" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="fname" required>
            </div>

            <div class="mb-3">
                <label for="uname" class="form-label">User Name</label>
                <input type="text" class="form-control" id="uname" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required>
            </div>

            <div class="mb-3">
                <label for="password1" class="form-label">Password</label>
                <input type="password" class="form-control" id="Password1" required>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>


<?php

include "inc/footer.php";

?>