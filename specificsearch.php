<!DOCTYPE html>
<html>
<head>
	<title>SIMS-Specific Searched Data</title>
<?php include('bootstraplibrary.php'); ?>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure you want to delete ?');
}
</script>
</head>
<body>
<?php include('simsheader.php'); ?>
<br>
<div class="container">
	<div class="row">
		<div class="col">
			<h3><b>Results Matched with Keyword</b></h3>
		</div>	
		<div class="col">
			<input class="form-control" id="myInput" type="text" placeholder="Search Profile....">
		</div>	
	</div>
</div>
<br>
<div class="container">  
  <h5><table class="table table-hover table-info table-responsive-md table-striped">
    <thead class="bg-dark text-light">
      <tr>
      	<th>Grade</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>DOB</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody class="table-sm" id="myTable">
<?php
if (isset($_GET['searchtype'], $_GET['keyword'])) {
$searchtype=$_GET['searchtype'];
$keyword=$_GET['keyword'];
$con = mysqli_connect("localhost","root","","sims");
if ($con)
  {
  $sql = "select * from studentinfo where $searchtype LIKE '%$keyword%' ORDER BY firstname";
  $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result)){
    	echo "<tr>";
    	echo "<td><i>".$row['grade']."</i></td>";
        echo "<td><i>".$row['firstname']."</i></td>";
        echo "<td><i>".$row['lastname']."</i></td>";
        echo "<td><i>".$row['gender']."</i></td>";
        echo "<td><i>".$row['dob']."</i></td>";
        echo "<td><i><a href='view.php?id=".$row['id']."'><span class='badge badge-secondary'>View</span></a> | <a href='edit.php?id=".$row['id']."'><span class='badge badge-primary'>Edit</span></a> | <a onclick='return checkDelete()' href='delete.php?id=".$row['id']."'><span class='badge badge-danger'>Delete</span></a></i></td>";
        echo "</tr>";
    }
  }
}
?>
    </tbody>
  </table></h5>
</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>