<?php
$popup = "";
if(isset($_GET['upload'])) {
    $message = $_GET['upload'];    
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
	<title>SIMS-Add New Profile</title>
<?php include('bootstraplibrary.php'); ?>
<?php echo $popup; ?>
</head>
<body>
<?php include('simsheader.php'); ?>
<br>
<form action="uploaddata.php" method="post" enctype="multipart/form-data">
<div class="container bg-light text-center">
	<h2>Enter Student Detail</h2>
	<div class="row text-center">
		<div class="col-md-4 col-sm-12">
			<br><br><br>
			<div id="imagePreview"><img id="imagePreview" src="profile.png" width="150px" height="150px"></div><br>
			<div class="custom-file">
            <label class="custom-file-label" id="imagefile">Upload Image</label>
            <input type="file" class="custom-file-input" id="file" onchange="fileValidation()" name="userimage">
            <h5><br>Passport Size Photo (Recommended)</h5><br><br><br>
            <button type="submit" class="btn btn-danger" name="upload">Save Profile</button>
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
		</div>
		<div class="col-md-8  col-sm-12">
			<br>
			<h4>Personal Information</h4>
			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text">First Name</span>
				</div>
				<input type="text" name="firstname" class="form-control" placeholder="Enter First Name" required>
			</div>
			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text">Last Name</span>
				</div>
				<input type="text" name="lastname" class="form-control" placeholder="Enter Last Name" required>
			</div>
			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text">Date of Birth</span>
				</div>
				<input type="date" name="dob" class="form-control">
			</div>
			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text">Gender</span>
				</div>
				<select class="form-control" name="gender">
				<option value="none">Choose Gender</option>
                <option>Male</option>
                <option>Female</option>
                </select>
			</div>
			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text">Grade</span>
				</div>
				<select class="form-control" name="grade">
				<option value="none">Choose Grade</option>
                <option>Nursery</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                </select>
			</div>
			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text">Permanent Address</span>
				</div>
				<input type="text" name="peradd" class="form-control" placeholder="Enter Permanent Address">
			</div>
			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text">Temporary Address</span>
				</div>
				<input type="text" name="tempadd" class="form-control" placeholder="Enter Temporary Address">
			</div>
			<br>
			<h4>Family Information</h4>
			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text">Father's Name</span>
				</div>
				<input type="text" name="fathername" class="form-control" placeholder="Enter Father Name">
			</div>
			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text">Contact Number</span>
				</div>
				<input type="number" name="fatherphone" class="form-control" placeholder="Enter Father Contact Number">
			</div>
			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text">Father's Occupation</span>
				</div>
				<input type="text" name="fatheroccupation" class="form-control" placeholder="Enter Father Occupation">
			</div>
			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text">Mother's Name</span>
				</div>
				<input type="text" name="mothername" class="form-control" placeholder="Enter Mother Name">
			</div>
			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text">Contact Number</span>
				</div>
				<input type="number" name="motherphone" class="form-control" placeholder="Enter Mother Contact Number">
			</div>
			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text">Mother's Occupation</span>
				</div>
				<input type="text" name="motheroccupation" class="form-control" placeholder="Enter Mother Occupation">
			</div>
			<br>
			<h4>Academic Remarks</h4>
			<div class="input-group mb-2">
			    <textarea class="form-control" name="academicremarks" placeholder="Enter Academic Remarks"></textarea>
			</div>
			<br>
			<h4>Extra Curriculum Activities</h4>
			<div class="input-group mb-2">				
				<div class="input-group-prepend">
					<span class="input-group-text">Sports</span>
				</div>
				<textarea class="form-control" name="sports" placeholder="Enter Patricipated Sports"></textarea>
			</div>
			<div class="input-group mb-2">				
				<div class="input-group-prepend">
					<span class="input-group-text">Competitons</span>
				</div>
				<textarea class="form-control" name="competitions" placeholder="Enter Patricipated Competitions"></textarea>
			</div>
			<br>
			<h4>Rewards</h4>
			<div class="input-group mb-2">	
				<textarea class="form-control" name="rewards" placeholder="Enter Achieved Rewards"></textarea>
			</div>
			<br>
			<h4>Punishments</h4>
			<div class="input-group mb-2">	
			    <textarea class="form-control" name="punishments" placeholder="Enter Punishments"></textarea>
			</div>
		</div>
	</div>
    <br>   
</div>
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