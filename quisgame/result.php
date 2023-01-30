<?php
session_start();
if($_SESSION['username'])
{
   $username= $_SESSION['username'];
}
else{
    header("location:login.php");
}


include "connection.php";//database connection file
//echo $_SESSION['username'];
if(isset($_POST['submit']))
{
    //hard level checking question answer
    if($_POST['level_id']==1)//checking the level
    {
        if(empty($_POST[1]) or empty($_POST[2]) or empty($_POST[3]) or empty($_POST[4]) or empty($_POST[5]))
        {
            $_SESSION['required']=" Please Attempt the All Questions";
            header("location:easyquiz.php");
        }
        else
        {
                        $eanswer1 = $_POST[1];
                        $eanswer2 = $_POST[2];
                        $eanswer3 = $_POST[3];
                        $eanswer4 = $_POST[4];
                        $eanswer5 = $_POST[5];
                
                        
                    
                    $etotalCorrect = 0;
                    $eresult ="";
                    // comparing answers
                    if ($eanswer1 == "Narendra Damodar Das Modi") { $etotalCorrect++; }

                    if ($eanswer2 == "Droupadi Murmu") { $etotalCorrect++; }
                    
                    if ($eanswer3 == "Rohit Sharma") { $etotalCorrect++; }
                    
                    if ($eanswer4 == "Sachin Tendulkar") { $etotalCorrect++; }
                    
                    if ($eanswer5 == "Shah Rukh Khan") { $etotalCorrect++; }
                    //comparing result
                    if($etotalCorrect==0)
                    {
                        
                        $eresult=" Worst. Do More Practice.";
                    }
                    elseif($etotalCorrect==5)
                    {
                        $eresult = " Very Strong.";
                    }
                    elseif($etotalCorrect==4)
                    {
                        $eresult = " Strong.";
                    }
                    elseif($etotalCorrect==3)
                    {
                        $eresult = " Good.";
                    }
                    elseif($etotalCorrect==2)
                    {
                        $eresult =  " Bad.";
                    }
                    //echo $etotalCorrect;
                    //die();
                        elseif($etotalCorrect==1)
                        {
                            $eresult = " Poor.";
                        }
                    //print game result

                    echo "<h1 style='text-align:center;color:green;margin-top:50px'><span style='text-transform:capitalize;'>{$_SESSION['username']}</span> Game Result is {$eresult}<a href ='index.php'style='color:red;margin-left;'>Home</a></h1>";

                    $sqle = "SELECT questions  FROM questions  WHERE level_id = $_POST[level_id]";
                    //echo"$sqle";
                    $querye = mysqli_query($conn,$sqle) or die("Query is failed");
                    if($querye)
                    {
                        if(mysqli_num_rows($querye)>0)
                        {
                            echo "<h4 style='color:yellow;margin-left:25px;'>Questions List</h4>";
                            echo "<ul>";  
                            while($rowe= mysqli_fetch_assoc($querye))
                            {
                                
                                echo "<li>".$rowe['questions']."</li>";
                                
                            }
                            echo "</ul>";
                        }
                    }
                        echo "<h4 style='color:green;margin-left:25px;'>Your Answers..</h4>";
                        echo "<ul>";
                        echo "<li>$eanswer1</li>";
                        echo "<li>$eanswer2</li>";
                        echo "<li>$eanswer3</li>";
                        echo "<li>$eanswer4</li>";
                        echo "<li>$eanswer5</li>";
                        echo "</ul>";
                    //echo $sqle;
                    
                    // echo $ques;
        }
       
        
    }
    //medium level checking question answer
    elseif($_POST['level_id']==2)//checking the level
    {
        if(empty($_POST[6]) or empty($_POST[7]) or empty($_POST[8]) or empty($_POST[9]) or empty($_POST[10]))
        {
            $_SESSION['required']=" Please Attempt the All Questions";
            header("location:mediumquiz.php");
        }
        else
        {
            $manswer1 = $_POST[6];
            $manswer2 = $_POST[7];
            $manswer3 = $_POST[8];
            $manswer4 = $_POST[9];
            $manswer5 = $_POST[10];
   
          $mtotalCorrect = 0;
          $mresult ="";
           
          //comparing answers
          if ($manswer1 == "Sundar Pichai") { $mtotalCorrect++; }
   
          if ($manswer2 == "Elon Musk") { $mtotalCorrect++; }
          
          if ($manswer3 == "Satya Nadella") { $mtotalCorrect++; }
          
          if ($manswer4 == "Tim Cook") { $mtotalCorrect++; }
          
          if ($manswer5 == "Joe Biden") { $mtotalCorrect++; }
           
          //comapring result
          if($mtotalCorrect==0)
           {
               
               $mresult=" Worst. Do More Practice";
           }
           elseif($mtotalCorrect==5)
           {
               $mresult = "  Very Strong.";
           }
          elseif($mtotalCorrect==4)
          {
              $mresult = " Strong.";
          }
          elseif($mtotalCorrect==3)
          {
              $mresult = " Good.";
          }
          elseif($mtotalCorrect==2)
          {
             $mresult =  " Bad";
          }
          elseif($mtotalCorrect==1)
          {
              $mresult = " Poor.";
          }
          //print result of game
          echo "<h1 style='text-align:center;color:orange;margin-top:50px'><span style='text-transform:capitalize;'>{$_SESSION['username']}</span> Game Result is $mresult <a href ='index.php'style='color:red;margin-left;'>Home</a></h1>";
          $sqlm = "SELECT questions  FROM questions  WHERE level_id = $_POST[level_id]";
           //echo"$sqle";
           $querym = mysqli_query($conn,$sqlm) or die("Query is failed");
           if($querym)
           {
               if(mysqli_num_rows($querym)>0)
               {
                   echo "<h4 style='color:yellow;margin-left:25px;'>Questions List</h4>";
                   echo "<ul>";  
                   while($rowm= mysqli_fetch_assoc($querym))
                   {
                       
                       echo "<li>".$rowm['questions']."</li>";
                       
                   }
                   echo "</ul>";
               }
           }
           echo "<h4 style='color:green;margin-left:25px;'>Your Answers..</h4>";
            echo "<ul>";
            echo "<li>$manswer1</li>";
            echo "<li>$manswer2</li>";
            echo "<li>$manswer3</li>";
            echo "<li>$manswer4</li>";
            echo "<li>$manswer5</li>";
            echo "</ul>";
        }

         
    }
    //hard level checking question answer
    elseif($_POST['level_id']==3)//checking the level
    {
        if(empty($_POST[11]) or empty($_POST[12]) or empty($_POST[13]) or empty($_POST[14]) or empty($_POST[15]))
        {
            $_SESSION['required']=" Please Attempt the All Questions";
            header("location:mediumquiz.php");
        }
        else
        {
                $hanswer1 = $_POST[11];
                $hanswer2 = $_POST[12];
                $hanswer3 = $_POST[13];
                $hanswer4 = $_POST[14];
                $hanswer5 = $_POST[15];
                
                $htotalCorrect = 0;
                $hresult ="";
                //comparing answer
                if ($hanswer1 == "Vasco Da Gama") { $htotalCorrect++; }

                if ($hanswer2 == "Himachal Pradesh") { $htotalCorrect++; }
                
                if ($hanswer3 == "Arunachal Pradesh") { $htotalCorrect++; }
                
                if ($hanswer4 == "Milkha Singh") { $htotalCorrect++; }
                
                if ($hanswer5 == "22 Languages") { $htotalCorrect++; }

                ////comapring result
                //echo $htotalCorrect;
                if($htotalCorrect==0)
                {
                    
                    $hresult="is Worst. Do More Practice";
                }
                elseif($htotalCorrect==5)
                {
                    $hresult = "is Very Strong";
                }
                elseif($htotalCorrect==4)
                {
                    $hresult = " is Strong";
                }
                elseif($htotalCorrect==3)
                {
                    $hresult = " is Good";
                }
                elseif($htotalCorrect==2)
                {
                $hresult =  "is Bad";
                }
                elseif($htotalCorrect==1)
                {
                    $hresult = "is Poor";
                }
                
                //print the game result
                echo "<h1 style='text-align:center;color:blue;margin-top:50px'><span style='text-transform:capitalize;'> {$_SESSION['username']}</span> Game Result  $hresult <a href ='index.php'style='color:red;margin-left;'>Home</a></h1>";

                $sqlh = "SELECT questions  FROM questions  WHERE level_id = $_POST[level_id]";
                //echo"$sqle";
                $queryh = mysqli_query($conn,$sqlh) or die("Query is failed");
                if($queryh)
                {
                    if(mysqli_num_rows($queryh)>0)
                    {
                        echo "<h4 style='color:yellow;margin-left:25px;'>Questions List</h4>";
                        echo "<ul>";  
                        while($rowh= mysqli_fetch_assoc($queryh))
                        {
                            
                            echo "<li>".$rowh['questions']."</li>";
                            
                        }
                        echo "</ul>";
                    }
                }
                echo "<h4 style='color:green;margin-left:25px;'>Your Answers..</h4>";
                echo "<ul>";
                echo "<li>$hanswer1</li>";
                echo "<li>$hanswer2</li>";
                echo "<li>$hanswer3</li>";
                echo "<li>$hanswer4</li>";
                echo "<li>$hanswer5</li>";
                echo "</ul>";
        }
                
    }

    else
    {
        header("location:index.php");//redirect index page
    }
   
}
else
{
     header("location:index.php");//redirect index page
}
?>