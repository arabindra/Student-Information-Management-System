<!DOCTYPE html>
<html>
<head>
	<title>SIMS-Student Detail</title>
<?php include('bootstraplibrary.php'); ?>
</head>
<body>
<?php include('simsheader.php'); ?>
<br>
<?php
if(isset($_GET['id'])) {
$id=$_GET['id'];
$con = mysqli_connect("localhost","root","","sims");
if ($con)
  {
  $sql = "select * from studentinfo where id='$id'";
  $result=mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result)){
?>
<div class="container bg-light text-center">
	<h2>Student Detail</h2>
	<div class="row text-center">
		<div class="col-md-4 col-sm-12">
			<br><br><br>
			<div><h4>Student Photo</h4><br><img src="<?php if($row['stdimage']==""){
	echo "profile.png";
}
else{
	echo "stdimage/".$row['stdimage'];
} ?>" width="150px" height="150px"></div>
        <br><br>
        <p><b>Information added in <?php echo $row['time'] ?></b></p>
        <br>
        <a href="<?php echo "edit.php?id=".$row['id'] ?>"><button class="btn btn-danger">Edit Information</button></a><br>
        </div>
        <div class="col-md-8  col-sm-12">
        	<br>
			<h4>Personal Information</h4>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text font-weight-bold bg-secondary text-light">First Name</span>
				</div>
				<input type="text" name="firstname" class="form-control font-weight-bold" value="<?php echo $row['firstname']; ?>" readonly>
			</div>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text font-weight-bold bg-secondary text-light">Last Name</span>
				</div>
				<input type="text" name="lastname" class="form-control font-weight-bold" value="<?php echo $row['lastname']; ?>" readonly>
			</div>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text font-weight-bold bg-secondary text-light">Date of Birth</span>
				</div>
				<input type="text" name="dob" class="form-control font-weight-bold" value="<?php echo $row['dob']; ?>" readonly>
			</div>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text font-weight-bold bg-secondary text-light">Gender</span>
				</div>
				<input type="text" name="gender" class="form-control font-weight-bold" value="<?php echo $row['gender']; ?>" readonly>
			</div>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text font-weight-bold bg-secondary text-light">Grade</span>
				</div>
				<input type="text" name="grade" class="form-control font-weight-bold" value="<?php echo $row['grade']; ?>" readonly>
			</div>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text font-weight-bold bg-secondary text-light">Permanent Address</span>
				</div>
				<input type="text" name="peradd" class="form-control font-weight-bold" value="<?php echo $row['peradd']; ?>" readonly>
			</div>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text font-weight-bold bg-secondary text-light">Temporary Address</span>
				</div>
				<input type="text" name="tempadd" class="form-control font-weight-bold" value="<?php echo $row['tempadd']; ?>" readonly>
			</div><br>
			<h4>Family Information</h4>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text font-weight-bold bg-secondary text-light">Father's Name</span>
				</div>
				<input type="text" name="fathername" class="form-control font-weight-bold" value="<?php echo $row['fathername']; ?>" readonly>
			</div>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text font-weight-bold bg-secondary text-light">Contact Number</span>
				</div>
				<input type="text" name="fatherphone" class="form-control font-weight-bold" value="<?php echo $row['fatherphone']; ?>" readonly>
			</div>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text font-weight-bold bg-secondary text-light">Father's Occupation</span>
				</div>
				<input type="text" name="fatheroccupation" class="form-control font-weight-bold" value="<?php echo $row['fatheroccupation']; ?>" readonly>
			</div>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text font-weight-bold bg-secondary text-light">Mother's Name</span>
				</div>
				<input type="text" name="mothername" class="form-control font-weight-bold" value="<?php echo $row['mothername']; ?>" readonly>
			</div>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text font-weight-bold bg-secondary text-light">Contact Number</span>
				</div>
				<input type="text" name="motherphone" class="form-control font-weight-bold" value="<?php echo $row['motherphone']; ?>" readonly>
			</div>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text font-weight-bold bg-secondary text-light">Mother's Occupation</span>
				</div>
				<input type="text" name="motheroccupation" class="form-control font-weight-bold" value="<?php echo $row['motheroccupation']; ?>" readonly>
			</div>
			<br>
			<h4>Academic Remarks</h4>
			<div class="input-group">
			    <textarea class="form-control font-weight-bold" name="academicremarks" readonly><?php echo $row['academicremarks']; ?></textarea>
			</div>
			<br>
			<h4>Extra Curriculum Activities</h4>
			<div class="input-group">				
				<div class="input-group-prepend">
					<span class="input-group-text font-weight-bold bg-secondary text-light">Sports</span>
				</div>
				<textarea class="form-control font-weight-bold" name="sports" readonly><?php echo $row['sports']; ?></textarea>
			</div>
			<div class="input-group">				
				<div class="input-group-prepend">
					<span class="input-group-text font-weight-bold bg-secondary text-light">Competitons</span>
				</div>
				<textarea class="form-control font-weight-bold" name="competitions" readonly><?php echo $row['competitions']; ?></textarea>
			</div>
			<br>
			<h4>Rewards</h4>
			<div class="input-group">	
				<textarea class="form-control font-weight-bold" name="rewards" readonly><?php echo $row['rewards']; ?></textarea>
			</div>
			<br>
			<h4>Punishments</h4>
			<div class="input-group">	
			    <textarea class="form-control font-weight-bold" name="punishments" readonly><?php echo $row['punishments']; ?></textarea>
			</div>
        </div>
    </div>
    <br><br>
</div>
<?php }}} ?>
</body>
</html>