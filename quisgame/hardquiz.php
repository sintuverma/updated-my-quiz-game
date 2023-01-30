<?php
   include 'connection.php';//database connection file
   include 'header.php';
session_start();
if($_SESSION['username'])
{
   $username= $_SESSION['username'];
}
else{
    header("location:login.php");
}
   // fetching data from database.
   $sql = "select * from questions where level_id = 3";
   $query = mysqli_query($conn,$sql) or die("Query is failed");
   if($query)
   {
       if(mysqli_num_rows($query)>0)
       {
           
          
               //print_r($row);
   ?>
<div class="row">
<div class="col-sm-3">
</div>
<div class="col-sm-6 bg-dark text-light">
<?php
   if(!empty($_SESSION['required']))
   {
      echo "<h5 class='text-danger text-center '>{$_SESSION['required']}</h5>";
   }
   ?>
   <form  method ="post"action="result.php" >
      <?php
         $i=1;
          while($row = mysqli_fetch_assoc($query))
         
          {
         ?>
      <input type="hidden" value="<?php echo $row['level_id'];?>" name="level_id">
      <h5 class=" text-warning  mt-2 mb-3 "> <?php echo "($i) ".$row['questions'];?></h5>
      <div class="row">
         <div class="col-sm-6 mt-2">
            <div class="form-check">
               <input type="radio" class="form-check-input text-light " id="radio1" name="<?php echo $row['quis_id'];?>" value="<?php echo $row['option1'];?>" ><?php echo $row['option1'];?>
            </div>
            <div class="form-check">
               <input type="radio" class="form-check-input text-light " id="radio1" name="<?php echo $row['quis_id'];?>" value="<?php echo $row['option2'];?>" ><?php echo $row['option2'];?>
            </div>
         </div>
         <div class="col-sm-6 mt-2">
            <div class="form-check">
               <input type="radio" class="form-check-input text-light " id="radio1" name="<?php echo $row['quis_id'];?>" value="<?php echo $row['option3'];?>" ><?php echo $row['option3'];?>
            </div>
            <div class="form-check">
               <input type="radio" class="form-check-input text-light " id="radio1" name="<?php echo $row['quis_id'];?>" value="<?php echo $row['option4'];?>" ><?php echo $row['option4'];?>
            </div>
         </div>
      </div>
      <?php
         $i++;}
         
           }
         }
         
         ?>
      <input type="submit" class="btn btn-success mt-3" name="submit" value="submit">
   </form>
</div>
<div class="col-sm-3">
<a href="logout.php" class="btn btn-danger mb-3">Logout</a>
   <p id="alert">You Have 30 Seconds Only For All Questions.</p>
   <div id="js_timer">
      <div id="timer">
         00:00
      </div>
   </div>
</div>
<script>
   //timing in  code start here
   var timer;
   var ele = document.getElementById('timer');
   
   (function (){
     var sec = 0;
     var time;
     timer = setInterval(()=>{
       ele.innerHTML = '00:'+sec;
       sec ++;
       if(sec==32)
         {
           alert("sorry your time out!");
           window.location.replace("index.php");////redirect index page
         }
     }, 1000) // each 1 second
   })()
    
   
</script>
<?php unset($_SESSION['required']);?>