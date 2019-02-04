<?php

session_start();
require('database.php');

if($_POST['submit'])
{
    if (!empty($_POST['userid'])) 
    {
           $login="SELECT * FROM login WHERE userid='".$_POST['userid']."' and password='".$_POST['pass']."'";
           $loginsql1 = mysqli_query($conn,$login);
           $logincount=mysqli_fetch_row($loginsql1);
           if($logincount[0])
           {
            $q="SELECT status FROM login WHERE userid='".$_POST['userid']."'";
            $sql1 = mysqli_query($conn,$q);
             $count=mysqli_fetch_row($sql1);

             if(trim($count[0])=='PASSIVE')
             {
                 
                 $q="UPDATE login SET status='ACTIVE' WHERE userid='".$_POST['userid']."'";
                     $sql1 = mysqli_query($conn,$q);
                     $_SESSION['status']='ACTIVE';
                     $_SESSION['user']=$_POST['userid'];
                     header("Location:hello1.php");
             }
             else
                     {
                       echo "<span style='margin:10%'>User already Signed You Cant have Access!!!";
                       echo "<br/><a href='login1.php'>GoTo Login</a></span> ";
                       echo " ".$count[0];
                       echo " ".$logincount;
                     }
               }
               else {
                echo "<span style='margin:10%'>Userid or Password is Incorrect!!!";
                echo "<br/><a href='login1.php'>Try Again</a></span> ";
                echo " ".$count[0];
                echo " ".$logincount;
               }
            } 

   
$conn->close();
}
?>