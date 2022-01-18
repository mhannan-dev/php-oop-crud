<?php

include "inc/navbar.php";

?>



<div class="container">
    <div class="heading text-center">
        <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
            <tr>
                <td style="padding:0;width:50%;" align="left">
                    <h1>User Profile</h1>
                </td>

                <td style="padding:0;width:50%;" align="right">
                    <a class="btn btn-success" href="index.php">Back</a>
                </td>

            </tr>
        </table>
    </div>

    <div class="row" style="max-width: 602px; margin: 0 auto;">
        <form>
            <div class="mb-3">
                <label for="fname" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="fname" value="Jahid Hasan">
            </div>

            <div class="mb-3">
                <label for="uname" class="form-label">User Name</label>
                <input type="text" class="form-control" id="uname" value="shiplo">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" value="shiplo@gmail.com">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</div>


<?php

include "inc/footer.php";

?>