<?php
error_reporting(0);
$error='';
session_start();
if(isset ($_POST['submit1'])){
    if(empty($_POST['uname'])||empty($_POST['psd'])){
        $error="Username or Password is invalid";
    }
    else{
        $user=$_POST['uname'];
        $pass=$_POST['psd'];
      
session_start();
$timezone=date_default_timezone_set("Asia/Islamabad");
        $conn=mysqli_connect("localhost","root","","revolta");
        $sql="SELECT * FROM reusers WHERE username='$user' AND psd='$pass'";
        $result=mysqli_query($conn,$sql);
        $rows=mysqli_num_rows($result);
        if($rows==1)
        {
            $id=$rows['id'];
            $_SESSION['id']=$id;
            $_SESSION['usname']=$user;
            header("location:order2.php");
            
        }
        else{
            $error="***Username or Password is Invalid***";

        }
    }
    $date=date("Y-m-d H:i:s");
$update="UPDATE reusers set last_login='$date' where username='$user'";
mysqli_query($conn,$update);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Here</title>
    <link rel="stylesheet" href="/Bootstrap/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.10.2-web/css/all.css">
    <link rel="stylesheet" href="style.css">
    <style>
     hr.hr1 {
  border: 5px solid rgb(11, 65, 87);
  border-radius: 5px;
}
.jumbotron{
    background: #2193b0;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #6dd5ed, #2193b0);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #6dd5ed, #2193b0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
    </style>
</head>

<body>
<?php
include('header.php');
?>
<div class="container mt-5" id="d1" style="width: fit-content;">
    <div class="jumbotron">
        <div class="row">
            <div class="col-10 ml-5">
                <form class="form-container" action="" method="POST">
                    <h3 class=" text-center" style="color:#124b81;font-weight: bold;">
                        LOGIN TO REVOLTA ENTERPRISES
                    </h3>
                    <hr class="hr1">
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>
            
                      <input type="text" class="form-control" name="uname" aria-describedby="emailHelp" placeholder="Enter Username" required autofocus>
              
                    </div>
                    <div class="form-group input-group">
                        <div class=" input-group-prepend">
                            <span class=" input-group-text">
                                <i class=" fa fa-user-lock"></i>
                            </span>
                        </div>
                      
                      <input type="password" class="form-control" name="psd" placeholder="Password" required>
                    </div>
                    
                  <input type="submit" class="btn btn-dark btn-block rounded-pill" value="Login" id="submit1" name="submit1">
                  <br>
                    <a  style="color:#0f263f;font-weight:bold;text-transform: capitalize;" id="s1">
                            Dont have a account?
                            Signup here
                        </a>
                       
                  </form>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5" id="d2" style="width:700px;">
    <div class="jumbotron">
        <div class="row">
            <div class="col-10 ml-5">
                <form class="form-container" action="usersignup.php" method="POST">
                    <h3 class=" text-center" style="color:#124b81;font-weight: bold;">
                        REGISTER YOURSELF WITH REVOLTA
                    </h3>
                    <hr class="hr1">
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-user-plus"></i>
                            </span>
                        </div>
            
                      <input type="text" class="form-control" name="name"  placeholder="Enter Fullname" required autofocus>
              
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-envelope"></i>
                            </span>
                        </div>
            
                      <input type="text" class="form-control" name="email"  placeholder="Enter Email" required autofocus>
              
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-phone"></i>
                            </span>
                        </div>
            
                      <input type="text" class="form-control" name="phno"  placeholder="Enter Phone Number" required autofocus>
              
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>
                      <input type="text" class="form-control" name="uname" placeholder="Enter Username" required autofocus>
                    </div>
                    <div class="form-group input-group">
                        <div class=" input-group-prepend">
                            <span class=" input-group-text">
                                <i class=" fa fa-user-lock"></i>
                            </span>
                        </div>
                      
                      <input type="password" class="form-control" name="psd" placeholder="Password" required>
                    </div>
                    
                  <input type="submit" class="btn btn-dark btn-block rounded-pill" name="submit" value="Register">       
                  </form>
            </div>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>
</body>
<script src="js/jquery-3.4.1.js"></script>
<script src="js/jquery.collapser.min.js"></script>

<script>
$(document).ready(function(){
$("#d2").hide();
$("#s1").click(function(){
    $("#d1").hide(1000);
$("#d2").show(1000);
});
});
</script>
</html>