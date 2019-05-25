<?php
$popup = "";
if(isset($_GET['update'])) {
    $message = $_GET['update'];    
    $popup = "<script type='text/javascript'>
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
    </script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SIMS-Student Detail</title>
<?php include('bootstraplibrary.php'); ?>
<?php echo $popup; ?>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure you want to delete ?');
}
</script>
</head>
<body>
<?php include('simsheader.php'); ?>
<br>
<form action="updatedata.php" method="post" enctype="multipart/form-data">
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
			<h4>Student Photo</h4><br><div id="imagePreview"><img src="<?php if($row['stdimage']==""){
	echo "profile.png";
}
else{
	echo "stdimage/".$row['stdimage'];
} ?>" width="150px" height="150px" id="imagePreview"></div>
        <br>
        <div class="custom-file">
            <label class="custom-file-label" id="imagefile">Upload New Image</label>
            <input type="file" class="custom-file-input" id="file" onchange="fileValidation()" name="userimage">
            <h5><br>Passport Size Photo (Recommended)</h5>            
            <input type="text" name="existimage" value="<?php echo $row['stdimage']; ?>" hidden>
            <input type="text" name="id" value="<?php echo $row['id']; ?>" hidden>
        </div>
			<script type="text/javascript">
				function fileValidation(){
    var fileInput = document.getElementById('file');
    var filePath = fileInput.value;
    var filename = fileInput.files[0].name;
    var size = fileInput.files[0].size;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Please upload image only having extensions .jpeg/.jpg/.png/.gif');
        fileInput.value = '';
        return false;
    }
    else if (size > 2000000) {
    	alert('Maximum image size exceeds 2MB');
        fileInput.value = '';
        return false;
    }
    else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"width="150px" height="150px"/>';
                document.getElementById('imagefile').innerHTML = filename;
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}
			</script>            
		<br><br><br><br>
        <button type="submit" class="btn btn-dark">Update Information</button><br><br>
        <a  onclick="return checkDelete()" href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete Information</a>
        </div>
        <div class="col-md-8  col-sm-12">
        	<br>
			<h4>Personal Information</h4>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text bg-info text-light">First Name</span>
				</div>
				<input type="text" name="firstname" class="form-control" value="<?php echo $row['firstname']; ?>">
			</div>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text bg-info text-light">Last Name</span>
				</div>
				<input type="text" name="lastname" class="form-control" value="<?php echo $row['lastname']; ?>">
			</div>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text bg-info text-light">Date of Birth</span>
				</div>
				<input type="date" name="dob" class="form-control" value="<?php echo $row['dob']; ?>">
			</div>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text bg-info text-light">Gender</span>
				</div>
				<select class="form-control" name="gender">
				<option value="none">Choose Gender</option>
                <option <?php  if ($row['gender']=="Male") {echo "selected";}?>>Male</option>
                <option <?php  if ($row['gender']=="Female") {echo "selected";}?>>Female</option>
                </select>
			</div>			
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text bg-info text-light">Grade</span>
				</div>
				<select class="form-control" name="grade">
				<option value="none">Choose Grade</option>
                <option <?php  if ($row['grade']=="Nursery") {echo "selected";}?>>Nursery</option>
                <option <?php  if ($row['grade']=="1") {echo "selected";}?>>1</option>
                <option <?php  if ($row['grade']=="2") {echo "selected";}?>>2</option>
                <option <?php  if ($row['grade']=="3") {echo "selected";}?>>3</option>
                <option <?php  if ($row['grade']=="4") {echo "selected";}?>>4</option>
                <option <?php  if ($row['grade']=="5") {echo "selected";}?>>5</option>
                <option <?php  if ($row['grade']=="6") {echo "selected";}?>>6</option>
                <option <?php  if ($row['grade']=="7") {echo "selected";}?>>7</option>
                <option <?php  if ($row['grade']=="8") {echo "selected";}?>>8</option>
                <option <?php  if ($row['grade']=="9") {echo "selected";}?>>9</option>
                <option <?php  if ($row['grade']=="10") {echo "selected";}?>>10</option>
                </select>
			</div>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text bg-info text-light">Permanent Address</span>
				</div>
				<input type="text" name="peradd" class="form-control" value="<?php echo $row['peradd']; ?>">
			</div>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text bg-info text-light">Temporary Address</span>
				</div>
				<input type="text" name="tempadd" class="form-control" value="<?php echo $row['tempadd']; ?>">
			</div><br>
			<h4>Family Information</h4>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text bg-info text-light">Father's Name</span>
				</div>
				<input type="text" name="fathername" class="form-control" value="<?php echo $row['fathername']; ?>">
			</div>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text bg-info text-light">Contact Number</span>
				</div>
				<input type="number" name="fatherphone" class="form-control" value="<?php echo $row['fatherphone']; ?>">
			</div>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text bg-info text-light">Father's Occupation</span>
				</div>
				<input type="text" name="fatheroccupation" class="form-control" value="<?php echo $row['fatheroccupation']; ?>">
			</div>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text bg-info text-light">Mother's Name</span>
				</div>
				<input type="text" name="mothername" class="form-control" value="<?php echo $row['mothername']; ?>">
			</div>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text bg-info text-light">Contact Number</span>
				</div>
				<input type="number" name="motherphone" class="form-control" value="<?php echo $row['motherphone']; ?>">
			</div>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text bg-info text-light">Mother's Occupation</span>
				</div>
				<input type="text" name="motheroccupation" class="form-control" value="<?php echo $row['motheroccupation']; ?>">
			</div>
			<br>
			<h4>Academic Remarks</h4>
			<div class="input-group">
			    <textarea class="form-control" name="academicremarks"><?php echo $row['academicremarks']; ?></textarea>
			</div>
			<br>
			<h4>Extra Curriculum Activities</h4>
			<div class="input-group">				
				<div class="input-group-prepend">
					<span class="input-group-text bg-info text-light">Sports</span>
				</div>
				<textarea class="form-control" name="sports"><?php echo $row['sports']; ?></textarea>
			</div>
			<div class="input-group">				
				<div class="input-group-prepend">
					<span class="input-group-text bg-info text-light">Competitons</span>
				</div>
				<textarea class="form-control" name="competitions"><?php echo $row['competitions']; ?></textarea>
			</div>
			<br>
			<h4>Rewards</h4>
			<div class="input-group">	
				<textarea class="form-control" name="rewards"><?php echo $row['rewards']; ?></textarea>
			</div>
			<br>
			<h4>Punishments</h4>
			<div class="input-group">	
			    <textarea class="form-control" name="punishments"><?php echo $row['punishments']; ?></textarea>
			</div>
        </div>
    </div>
    <br><br>
</div>
<?php }}} ?>
</form>
<div class="modal fade text-center" id="myModal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Alert</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <?php echo $message; ?>
        </div>
                
      </div>
    </div>
  </div>
</body>
</html>