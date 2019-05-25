<?php
session_start();
if(isset($_SESSION['username'])){
    header('location:dashboard.php');
}
include("connect.php");
$message="";
date_default_timezone_set("Asia/Kathmandu");
$date = date ('Y\/m\/d H:i:s A');
if($_SERVER["REQUEST_METHOD"] == "POST") {
$username=mysqli_real_escape_string($con,$_POST['username']);
$password=md5(mysqli_real_escape_string($con,$_POST['password'])); 
$query="Select * From admin";
$result=mysqli_query($con,$query);
$count=0;
while($row=mysqli_fetch_array($result))
{
if($row["username"]==$username && $row["password"]==$password)
{$count=$count+1;}
}
if($count>=1)
{
$_SESSION['username']=$username;
mysqli_query($con,"UPDATE admin SET time='$date' WHERE username='$username'");
header("location:dashboard.php");
}
else {
$message = "<br><div class='alert alert-danger'>
    Invalid Username or Password!
  </div>";
}
}
?>

<html>
<head>
<title>SIMS Login</title>
<?php include('bootstraplibrary.php'); ?>
<style>
.container {
  box-shadow: 0 10px 80px 0 rgb(255,228,225);
  transition: 0.7s;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  width: 300px;
  background:rgba(255,255,255,0.5);
}
.container:hover {
  box-shadow: 0 9px 20px 0px rgb(255,228,225);
  background:rgba(255,255,255,0.7);
}
</style>
</head>
<body class="bg-dark">
<div class="container bg-light rounded justify-content-center text-center">
<h2><b>SIMS Login</b></h2>
   <form action="#" method="post">
   	<div class="form-group">
      <label>Username:</label>
      <input type="text" class="form-control" placeholder="Enter username" name="username" required>
    </div>
    <div class="form-group">
      <label>Password:</label>
      <input type="password" class="form-control" placeholder="Enter password" name="password" required>
    </div>
    <input type="submit" class="btn btn-primary"><br>
<?php echo $message ?>
  </form>
</div>
</body>
</html>