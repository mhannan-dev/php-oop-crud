<?php

include "inc/navbar.php";

?>



<div class="container">
    <div class="heading text-center">
        <h1>User Login</h1>
    </div>
    <div class="row" style="max-width: 602px; margin: 0 auto;">
        <form>
            <div class="mb-2">
                <label for="email1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp1" required>
                <div id="emailHelp1" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password1" class="form-label">Password</label>
                <input type="password" class="form-control" id="Password1" required>
            </div>

            <button type="submit" class="btn btn-success">Login</button>
        </form>
    </div>
</div>


<?php

include "inc/footer.php";

?>