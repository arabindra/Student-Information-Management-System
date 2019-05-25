<!DOCTYPE html>
<html>
<head>
	<title>SIMS-Student Profile</title>
<?php include('bootstraplibrary.php'); ?>
</head>
<body>
<?php include('simsheader.php'); ?>
<br>
<div class="container bg-light rounded justify-content-center text-center"  style="width: 350px">
<form action="gradestudentprofile.php" method="get">
    <div class="form-group py-3">
      <label><h4><b>Select Grade</b></h4></label>
      <select class="form-control mb-3" name="grade">
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
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
</body>
</html>