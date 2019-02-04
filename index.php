<!DOCTYPE html>
<?php
session_start();
require('database.php');

if(isset($_SESSION["status"])){
    $q="UPDATE login SET status='PASSIVE' WHERE userid='".$_SESSION["user"]."'";
    $sql1 = mysqli_query($conn,$q);
    unset($_SESSION["status"]);
}
if(isset($_SESSION["user"])){
    unset($_SESSION["user"]);
}

session_destroy();
?>

<html lang="en">

<head>
    <title>SlideDemo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <style>
        .card:hover {
            border: 5px solid white;
            transition: ease-out;
            transition-delay: 1ms;
        }
        .element {
            margin-top: 10%;
            margin-left: 15%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="element" id="1"  style="display:block;height:450;width:300" onclick="toggle_visibility('1')">
                        <h2 style="margin-left:20%;text-shadow:5px;">Gender
                            <br/>-> <a href="login.php">  REGISTER HERE</a>
                            <br/>-> <a href="login1.php">  LOGIN HERE</a>
                          </h2>
                    <div class="row">
                            
                        <a href="#" onclick="gen('Male')">
                            <div class="card" style="width: 12rem;">
                                <div class="card-body" >

                                    <center>
                                        <h5 class="card-title" style="text-decoration:none;">MALE</h5>
                                    </center>
                                    <img src="men.jpg" class="card-img-top" alt="Male">
                                </div>
                            </div>
                        </a>
                        &nbsp;&nbsp; &nbsp; &nbsp;
                        <a href="#"  onclick="gen('Female')">
                            <div class="card" style="width: 12rem;">
                                <div class="card-body" >
                                    <center>
                                        <h5 class="card-title" style="text-decoration:none;">FEMALE</h5>
                                    </center>
                                    <img src="women.png" class="card-img-top" alt="Female">
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="element" id="2" style="display:none;" >
                        <h2 style="margin-left:20%;text-shadow:5px;">Full Name</h2>
                    <div class="row">
                            <form id="nametxt" name="nametxt" style="margin-left:20%;text-shadow:5px;">

                                    <div class="form-group">
                                      <input type="text" class="form-control" id="fname" aria-describedby="fnameHelp" placeholder="Enter Full Name">
                                      <small id="fnameHelp" class="form-text text-muted">We'll never share your Name with anyone else.</small>
                                    </div>
                                    
                                    <button type="button" class="btn btn-primary" onclick="toggle_visibility('2')">Submit</button>
                                  </form>
                      </div>

                </div>
                <div class="element" id="3" style="display:none;" >
                        <h2 style="margin-left:20%;text-shadow:5px;">Mobile No</h2>
                    <div class="row">
                            <form id="mob" name="mob" style="margin-left:20%;text-shadow:5px;">

                                    <div class="form-group">
                                      <input type="number" class="form-control" id="mobile" aria-describedby="mobileHelp" placeholder="Enter Mobile Number" required>
                                      <small id="mobileHelp" class="form-text text-muted">We'll never share your Mobile No. with anyone else.</small>
                                    </div>
                                    
                                    <button type="button" class="btn btn-primary" onclick="toggle_visibility('3')">Submit</button>
                                  </form>
                      </div>

                </div>
                <div class="element" id="4" style="display:none;" >
                        <h2 style="margin-left:20%;text-shadow:5px;">Net Monthly Salary</h2>
                    <div class="row">
                            <form id="sal" name="sal" style="margin-left:20%;text-shadow:5px;">

                                    <div class="form-group">
                                      <input type="number" class="form-control" id="salary" aria-describedby="salaryHelp" placeholder="Enter Net Salary" required
                                      <small id="salaryHelp" class="form-text text-muted">We'll never share your Salary with anyone else.</small>
                                    </div>
                                    
                                    <button type="button" class="btn btn-primary" onclick="toggle_visibility('4')">Submit</button>
                                  </form>
                      </div>

                </div>
                <div class="element" id="5" style="display:none;" onload="alert('Your Info is Completed')">
                        <h2 style="margin-left:20%;text-shadow:5px;">Data Entered :</h2>
                    <div class="row">
                            <form id="res" name="res" style="margin-left:20%;text-shadow:5px;">

                                    <div class="form-group">
                                    <h2>Name :<label id="name_txt"></label> <br>
                                        Mobile :<label id="mobile_txt"></label> <br>
                                        Salary :<label id="netsal_txt"></label><br>
                                        Gender :<label id="gen_txt"></label>
                                    </h2>
                                   <a href="index.html ">GOTO HOME</a>
                                    </div>
                                  </form>
                      </div>

                </div>


            </div>
            <div class="col-sm-4">

            </div>
        </div>
    </div>

    <script type="text/javascript">
    var n,nt,mb,ge;

                function nset(n1)
                {
                    n=n1;
                }
                function ntset(nt1)
                {
                    nt=nt1;
                }
                function mbset(mb1)
                {
                    mb=mb1;
                }
                function gen(g)
                {
                    ge=g;
                }

                
                
                function toggle_visibility(id){
                    var data=parseInt(id);
                    var x;
                    switch (data) {
                        case 2:
                            x = document.getElementById("nametxt").elements.namedItem("fname").value;
                            nset(x);
                            break;
                        case 3:
                        x = document.getElementById("mob").elements.namedItem("mobile").value;
                            mbset(x);
                            break;
                        case 4:
                        x = document.getElementById("sal").elements.namedItem("salary").value;
                            ntset(x);
                            break;
                      }
                    
                    var i=data;
                    while (i >= 1) {
                       
                            var e = document.getElementById(i);
                            e.style.display = 'none';
                            i--;
                        }
                    var f = document.getElementById(data+1);  
                          f.style.display = 'block';

                          if(data==4)
                          {
                            document.getElementById("name_txt").innerHTML=n;
                            document.getElementById("mobile_txt").innerHTML=mb;
                            document.getElementById("netsal_txt").innerHTML=nt;
                            document.getElementById("gen_txt").innerHTML=ge;
                          }
                }

              
        
        </script>
</body>

</html>