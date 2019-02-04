<?php

session_start();
require('database.php');

if($_POST['submit'])
{
    if (!empty($_POST['userid'])) 
    {
            $q="SELECT COUNT(userid) FROM login WHERE userid='".$_POST['userid']."'";
            $sql1 = mysqli_query($conn,$q);
             $count=mysqli_fetch_row($sql1);
     }
    if($count[0]==0)
    {
        $sql = "insert into login (userid,password,status) values ('".$_POST['userid']."','".$_POST['pass']."','ACTIVE')";

        if ($conn->query($sql) === TRUE) {
            echo "<span style='margin:10%'>You are Registered successfully";
            $_SESSION['user']=$_POST['userid'];
            echo "<a href='hello.php'>Goto Profile</a></span>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    else
            {
              echo "<span style='margin:10%'>Username already exists";
              echo "<br/><a href='login.php'>GoTo Register</a></span> ";
              exit;
            }

$conn->close();
}
?>