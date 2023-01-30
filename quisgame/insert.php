<?php
include 'connection.php';
session_start();
if(isset($_POST['submit']))
{
     $userfullname = $_POST['userfullname'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $encp = md5($password);
     $check = "select email from user where email = '$email'";
     //echo $check;
     //die();
     $result = mysqli_query($conn,$check);
     if(mysqli_num_rows($result)>0)
     {
      $_SESSION['email_already']= "Email is Already Exist. Enter Other Email";
      //echo $_SESSION['email_already'];
      //die();
      header("location:registration.php");
     }
     else
     {
         //echo $encp;
     $sql = "insert into user (userfullname, email, password) values('$userfullname','$email','$encp')";
     $query = mysqli_query($conn,$sql);
     if($query)
     {
      $_SESSION['successfully']= "Your Registration is successful. Login Here ";
        header("location:login.php");
     }
     else
     {
      $_SESSION['error']= " Sorry Your Registration is not successful";
      header("location:registration.php");
     }

     }
     
}
?>
