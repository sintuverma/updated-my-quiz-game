<?php
session_start();

include "header.php";
?>
<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
        <h1 class="text-center text-dark bg-primary mt-3"> Login Form</h1>
        <?php
        //login error showing
        if(isset($_SESSION['login_error']))
            {
                echo "<h4 class='text-danger bg-dark'>{$_SESSION['login_error']}</h4>";
            }
            //successfully registration
            if(isset($_SESSION['successfully']))
            {
                echo "<h3 class='text-success bg-light'>{$_SESSION['successfully']}</h1>";
            }
        ?>
            <form action="loginpage.php" method="post">
                
                <label>Email:</label>
                <div class="form-group">
                    <input type="email" name = "email" class="form-control" required>
                </div>

                <label>Password:</label>
                <div class="form-group">
                    <input type="password" name = "password" class="form-control" required>
                </div>
                <input type="submit" class="btn btn-success btn-block mt-2" name="submit" value = "submit"> <a href="registration.php">Click here for Registration </a>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
<?php
include "footer.php";
session_destroy();
?>