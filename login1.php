<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  
</head>
<body>
        <?php
            if(isset($_SESSION["user"])){
                header("Location:hello1.php");
            }
            else
            {
        ?>
        <form action="loginpro1.php" name="login" id="login" style="margin:15%" method="POST">
            <input type="text" name="userid" id="userid" placeholder="User ID" required/>
            <input type="password" name="pass" id="pass" placeholder="Password" required/>
            <input type="submit" name="submit" id="submit" value="Login"/>
        </form>
        <?php
            }
            
            ?>

    
</body>
</html>