<?php 
session_start();
include("header.php");
include("navbar.php");
?>
 <div class="background-image" id="">
<div class="background-Images"></div>
<div class="row justify-content-center">
        <div class="col-md-6">
        <div class="container pt-4">


    <div class="row">
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
            <div class="card">
                <div class="card-header"><h4>Registration</h4></div>
                <div class="card-body">
                <form action="reg_code.php" method="POST">
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname">
                        <label for="fname">First Name</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="mname" placeholder="Middle Name" name="mname">
                        <label for="mname">Midle Name</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="sname" placeholder="Surname" name="sname">
                        <label for="sname">Surname</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                        <label for="pwd">Password</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="password" class="form-control" id="pwd2" placeholder="Enter password" name="cpswd">
                        <label for="pwd2">Confirm Password</label>
                    </div>
                        <button type="submit" name="register" class="btn btn-secondary btn-grey">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
include("footer.php");
?>
```