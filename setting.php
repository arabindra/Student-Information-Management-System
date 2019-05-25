<!DOCTYPE html>
<html>
<head>
	<title>SIMS-Admin Setting</title>
<?php include('bootstraplibrary.php'); ?>
<script language="JavaScript" type="text/javascript">
function check(){
    var newpswd = document.getElementById("new").value;
    var repswd = document.getElementById("re").value;
    if (newpswd != repswd) {
            alert("Passwords Didn't Matched");
            return false;
        }
        else{
        return true;
    }
}
</script>
</head>
<body>
<?php include('simsheader.php'); ?><br>
<div class="container bg-light">	
	<h4 class="font-weight-bold text-center">Admin Setting</h4><br>
	<p class="text-center">Your session is active since <?php
$con = mysqli_connect("localhost","root","","sims");
if ($con) {
$othersql = "select * from admin";
$result=mysqli_query($con,$othersql);
while($row = mysqli_fetch_array($result)){
  echo $row['time'];  
}}
?> ago</p><br>
<h5 class="font-weight-bold ml-5">Change Password</h5><br>
<form action="updatepassword.php" method="post">
	<div class="input-group mb-2 ml-3 w-50">
				<div class="input-group-prepend">
					<span class="input-group-text">New Password</span>
				</div>
				<input type="password" name="newpassword" class="form-control" placeholder="Enter New password" id="new" required>
	</div>
	<div class="input-group mb-2 ml-3 w-50">
				<div class="input-group-prepend">
					<span class="input-group-text">Confirm Password</span>
				</div>
				<input type="password" name="confirmpassword" class="form-control" placeholder="Re-Enter Password" id="re" required>
	</div>
	<br><input type="submit" class="btn btn-danger ml-5" value="Change Password" onclick="return check()"><br>
</form>
</div>
</body>
</html>