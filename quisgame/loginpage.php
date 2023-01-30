<?php
session_start();
include "connection.php";
$email = $_POST['email'];
$password = $_POST['password'];
$encp = md5($password);

$sql = "select userfullname ,email, password from user where email ='$email' and password = '$encp'";
//$sql = "select * from user ";
$query = mysqli_query($conn,$sql) or die("query is failed");



if(mysqli_num_rows($query)>0)
{
    while($row=mysqli_fetch_assoc($query))
    {
        //print_r($row);
        $name = $row['userfullname'];
    }
   
    $_SESSION['username'] = $name;
    //echo $name;
    //echo $_SESSION['username'];
    //die();
    header("location:index.php");
    
}
else
{
    $_SESSION['login_error'] = "Your Email or Password Error!";
    //$error = $_SESSION['login_error'];
    header("location:login.php");
}
?>