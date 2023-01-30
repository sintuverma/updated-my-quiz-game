<?php
include "header.php";
session_start();
?>
<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">

        <h1 class="text-center text-success mt-3"> Registration Form</h1>
        <?php
        if(isset($_SESSION['email_already']))
        {
            echo "<h5 class='text-center text-danger mt-3'> {$_SESSION['email_already']}</h5>";
        }
        ?>
            <form action="insert.php" method="post">
                <label>User Full Name:</label>
                <div class="form-group">
                    <input type="text"  name = "userfullname"class="form-control" required>
                </div>
                <label>Email:</label>
                <div class="form-group">
                    <input type="text" name = "email" class="form-control" required>
                </div>
                <label>Password:</label>
                <div class="form-group">
                    <input type="password" name = "password" class="form-control" required>
                </div>
                <input type="submit" class="btn btn-success btn-block mt-2" name="submit" value = "submit"> <a href="login.php">Click here for Login </a>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
<?php
include "footer.php";
?>