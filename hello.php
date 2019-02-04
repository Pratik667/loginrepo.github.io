<?php
session_start();
if(isset($_SESSION["user"])){

}
else
{
    $_SESSION["user"] = 'Guest';
}

if (isset($_SESSION["user"]) ) {
    echo "<span style='margin:10%'> Hello Mr.".$_SESSION['user'];
    echo "<br/><br/><a href='index.php'>LogOut</a> </span>";
 }
 else
 {
    // echo " Please Click on Login";
    header("Location:login.php");
 }
 
?>