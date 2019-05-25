<?php include('session.php'); ?>
<div class="container-fluid">
<div class="row bg-dark">
	<div class="col-2 text-center"><img src="student.png" height="100" width="100"></div>
    <div class="col-10 align-self-center"><font color=" white" size="6"><b>Student Information Management System</b></font></div>
</div>
</div>
<nav class="navbar navbar-expand-sm bg-secondary justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link btn btn-dark mr-3" href="dashboard.php"><span class="fas fa-tachometer-alt"></span>&nbsp;Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn btn-dark mr-3" href="studentprofile.php"><span class="fas fa-user"></span>&nbsp;Student Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn btn-dark mr-3" href="addnewprofile.php"><span class="fas fa-plus"></span>&nbsp;Add New Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn btn-dark mr-3" href="searchprofile.php"><span class="fas fa-search"></span>&nbsp;Search Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn btn-dark mr-3" href="setting.php"><span class="fas fa-cog fa-spin"></span>&nbsp;Admin</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn btn-dark" href="logout.php"><span class="fas fa-sign-out-alt"></span>&nbsp;Logout</a>
    </li>
  </ul>
</nav>