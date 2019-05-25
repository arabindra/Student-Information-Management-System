<!DOCTYPE html>
<html>
<head>
	<title>SIMS-Search Profile</title>
<?php include('bootstraplibrary.php'); ?>
</head>
<body>
<?php include('simsheader.php'); ?>
<br>
<div class="container bg-light rounded justify-content-center text-center">
<form action="specificsearch.php" method="get">
<br><label><h3><b>Search Specific Data</b></h3></label><br><br>
<div class="row">
	<div class="col">
    <div class="form-group">
      <label><h4><b>Search Type</b></h4></label>
      <select class="form-control" name="searchtype">
        <option value="firstname">First Name</option>
        <option value="lastname">Last Name</option>
        <option value="fathername">Father First Name</option>
        <option value="mothername">Mother First Name</option>
        <option value="fatherphone">Father Contact Number</option>         
        <option value="motherphone">Mother Contact Number</option>       
        <option value="peradd">Permanent Address</option>
        <option value="tempadd">Temporary Address</option>
        <option value="rewards">Rewards</option>
        <option value="sports">Sports</option>
        <option value="competitions">Competitions</option>
      </select>      
    </div>
    </div>
    <div class="col">
    	<label><h4><b>Keyword</b></h4></label>
    	<input type="text" name="keyword" class="form-control" placeholder="Enter the keyword...." required>
    </div>
</div>
<br>
<div class="text-center"><button type="submit" class="btn btn-secondary">Search</button></div><br><br>
</form>
</div>
</body>
</html>