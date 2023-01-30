<?php
//echo "hello";
if(isset($_POST['submit']))
{
    echo "hello";
    $level = $_POST['select_level'];
    if($level== 1){
        header("location:easyquiz.php");
    }
    elseif($level== 2)
    {
        header("location:mediumquiz.php");
    }
    elseif($level== 3)
    {
        header("location:hardquiz.php");
    }
    else
    {
        header("location:questions_page.php");
       
    }
    
}
else{
    header("location:questions_page.php");
}
?>