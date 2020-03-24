<?php
$conn=mysqli_connect("localhost","root","","revolta");

error_reporting(0);
$name=$_POST['name'];
$email=$_POST['email'];
$phno=$_POST['phno'];
$uname=$_POST['uname'];
$psd=$_POST['psd'];
$sql="INSERT INTO reusers(name,email,phno,username,psd) VALUES ('$name','$email','$phno','$uname','$psd')";
mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registered</title>
    <link rel="stylesheet" href="Bootstrap/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.10.2-web/css/all.css">
    <style>
      
hr.hr1 {
  border: 5px solid rgb(11, 65, 87);
  border-radius: 5px;
}
</style>
</head>
<body>
<?php
include('header.php');
?>
</div>
<div class="container-fluid">
    <h2 class="text-center" style="color:rgb(11, 65, 87)">Successfully Registered with revolta</h2>
    <hr class="hr1">
    <a href="order.php" style="font-size: large;font-weight: bold;text-align: center;color:rgb(11, 65, 87)">
      Go Back To login
    </a>
   
</div>

</body>
    <script src="js/jquery-3.4.1.js"></script>
  
</html>