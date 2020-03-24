<?php
$conn=mysqli_connect("localhost","root","","revolta");
error_reporting(0);
$name=$_POST['name'];
$email=$_POST['email'];
$phno=$_POST['phno'];
$service=$_POST['sel1'];
$details=$_POST['details'];
$sql="INSERT INTO orderdetails(name,email,phno,service,description) VALUES ('$name','$email','$phno','$service','$details')";
mysqli_query($conn,$sql);
?>
<?php
session_start();
$conn=mysqli_connect("localhost","root","","revolta");
$username=$_SESSION['usname'];

if(isset($_POST['logout']))
{
    
    $timezone=date_default_timezone_set("Asia/Islamabad");
    $date=date("Y-m-d H:i:s");
    $update="UPDATE reusers set last_logout='$date' where username='$username'";
    mysqli_query($conn,$update);
    header("location:order.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order details</title>
    <link rel="stylesheet" href="/Bootstrap/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.10.2-web/css/all.css">
    <link rel="stylesheet" href="style.css">
</head>
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
<body>
<?php
include('header.php');
?>
    <div class="container mt-5" id="d2" style="width:700px;">
        <div class="jumbotron">
            <div class="row">
                <div class="col-12">
                <h3 class="text-center" style="color:rgb(11, 65, 87)">
        Welcome
        <?php
      echo  $_SESSION['usname'];
      echo $_SESSION['id'];
        ?>
    </h3>
</div>
                <div class="col-10 ml-5">
                    <form class="form-container" action="" method="POST">
                        <h3 class=" text-center" style="color:rgb(11, 65, 87);;font-weight: bold;">
                               PLACE YOUR ORDER HERE
                        </h3>
                        <hr class="hr1">
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user-plus"></i>
                                </span>
                            </div>
                
                          <input type="text" class="form-control" name="name"  placeholder="Enter Fullname" >
                  
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-envelope"></i>
                                </span>
                            </div>
                
                          <input type="text" class="form-control" name="email"  placeholder="Enter Email" >
                  
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-phone"></i>
                                </span>
                            </div>
                
                          <input type="text" class="form-control" name="phno"  placeholder="Enter Phone Number" >
                  
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-building"></i>
                                </span>
                            </div>
                            <select class="form-control" id="sel1" name="sel1" aria-placeholder="Select Service">
                                <option value="" disabled selected>Select your option</option>
                                <option value="web">Web development</option>
                                <option value="app">App development</option>
                                <option value="graphic">Graphic Designing</option>
                                <option value="content">Content writing</option>
                              </select>
                        </div>
                        <label style="font-weight: bold;color:rgb(11, 65, 87);" >
                            Order Details
                        </label>
                        <div class="form-group input-group">
                           
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-info-circle"></i>
                                </span>
                            </div>
                          
                         <textarea rows="4" cols="50" name="details" > </textarea>
                         <br />
                        
                        </div>
                        
                        
                        

                      <input type="submit" class="btn btn-dark btn-block rounded-pill" value="PLACE ORDER" name="submit" id="b1"> 
                      <input type="submit" class="btn btn-dark btn-block rounded-pill" value="logout" name="logout" id="b1">     
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
    $("#b1").click(function(){
alert("Thank you for Placing your order with Revolta Enterprises. We will get back to you!");
});
    </script>
</html>