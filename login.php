<?php

include("header.php");
include("navbar.php");
?>

<?php
            if (isset($_SESSION['status1'])) {
        ?>
            <div class="alert alert-success alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <weak>Ate!</weak> <?= $_SESSION['status1'] ?>
            </div>
        <?php
                unset($_SESSION['status1']);
            }
        ?>
        <?php
            if (isset($_SESSION['status2'])) {
        ?>
            <div class="alert alert-danger alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Flop!</strong> <?= $_SESSION['status2'] ?>
            </div>
        <?php 
                unset($_SESSION['status2']);
            }
        ?>
        
<div class="background-image">
<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><h4>Login</h4></div>
                <div class="card-body">
                    <form action="login_code.php" method="POST">
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                            <label for="email">Email</label>
                        </div>
                        <div class="form-floating mt-3 mb-3">
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                            <label for="pwd">Password</label>
                        </div>
                        <button type="submit" name="login_now" class="btn btn-secondary">Login</button><!-- Changed the button color to gray -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div></div>


<?php
include("footer.php");
?>
