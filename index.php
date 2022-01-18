<?php

include "inc/navbar.php";
include "lib/User.php";

$user = new User();

?>

<!-- body -->
<div class=" card container-fluid">
    <div class=" card-heading text-center">
        <h2 class="mt-3"><strong>Welcome!</strong> Jahid</h2>
    </div>

    <div class="card-body">
        <table class="table table-striped">

            <tr>
                <th style="width:20%">Serial</th>
                <th style="width:20%">Name</th>
                <th style="width:20%">Username</th>
                <th style="width:20%">Email</th>
                <th style="width:20%">Action</th>
            </tr>


            <tr>
                <th scope="row">01</th>
                <td>Jahid Hasan</td>
                <td>shiplo</td>
                <td>shiplo@gmail.com</td>
                <td><a href="profile.php?id=1" class="btn btn-success">View</a></td>
            </tr>
            <tr>
                <th scope="row">02</th>
                <td>Masum khan</td>
                <td>masum</td>
                <td>masum@gmail.com</td>
                <td><a href="profile.php?id=2" class="btn btn-success">View</a></td>
            </tr>
            <tr>
                <th scope="row">03</th>
                <td>Shakil Hasan</td>
                <td>shakil</td>
                <td>shakil@gmail.com</td>
                <td><a href="profile.php?id=3" class="btn btn-success">View</a></td>
            </tr>

        </table>
    </div>
</div>
<!-- endbody -->



<?php

include "inc/footer.php";

?>