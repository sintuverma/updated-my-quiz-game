<?php
include 'connection.php';
include 'header.php';
session_start();
if($_SESSION['username'])
{
   $username= $_SESSION['username'];
}
else{
    header("location:login.php");
}
?>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <h5 class="text-success"> Welcome <?php echo $username;?></h5>
        <form method="post" action="questions_page.php">
        <select class="form-select" name="select_level">
            <option>Select The Level Of Game </option>
           <?php
            $sql = "select * from level ";
            $query = mysqli_query($conn,$sql) or die("Query is failed");
            if($query)
            {
                if(mysqli_num_rows($query)>0)
                {
                    while($row = mysqli_fetch_assoc($query))
                    {?>
                       <option value="<?php echo $row['level_id']?>"><?php echo $row['level']?></option>
                        <?php
                    }
                }
            }
            ?>
        </select> 
        <input type="submit" class="btn btn-primary mt-3" name="submit" >
        </form></div>
            <div class="col-sm-4">
            <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
        
    <?php
    include 'footer.php';
    ?>  
   




   



  