<?php
$message="";
date_default_timezone_set("Asia/Kathmandu");
if($_SERVER["REQUEST_METHOD"] == "POST") {
$target_dir = "stdimage/";
$target_file = $target_dir .  date('Y_m_d_H_i_s') . '_'. $_FILES["userimage"]["name"];
$allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg",
        "gif"
    );    
$file_extension = strtolower(pathinfo($_FILES["userimage"]["name"], PATHINFO_EXTENSION));
function upload($stdimage){
$date = date ('Y\/m\/d H:i:s A');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$grade = $_POST['grade'];
$peradd = $_POST['peradd'];
$tempadd = $_POST['tempadd'];
$fathername = $_POST['fathername'];
$fatherphone = $_POST['fatherphone'];
$fatheroccupation = $_POST['fatheroccupation'];
$mothername = $_POST['mothername'];
$motherphone = $_POST['motherphone'];
$motheroccupation = $_POST['motheroccupation'];
$academicremarks = $_POST['academicremarks'];
$sports = $_POST['sports'];
$competitions = $_POST['competitions'];
$rewards = $_POST['rewards'];
$punishments = $_POST['punishments'];
$sql = "INSERT INTO studentinfo (time, stdimage, firstname, lastname, dob, gender, grade, peradd, tempadd, fathername, fatherphone, fatheroccupation, mothername, motherphone, motheroccupation, academicremarks, sports, competitions, rewards, punishments)
VALUES ('$date', '$stdimage', '$firstname', '$lastname', '$dob', '$gender', '$grade', '$peradd', '$tempadd', '$fathername', '$fatherphone', '$fatheroccupation', '$mothername', '$motherphone', '$motheroccupation', '$academicremarks', '$sports', '$competitions', '$rewards', '$punishments')";
$con = mysqli_connect("localhost","root","","sims");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if (mysqli_query($con, $sql)) {
  header('location:addnewprofile.php?upload=Data Successfully Added');
} 
else {
  header('location:addnewprofile.php?upload=Error in Uploading Data');
}
}
if (file_exists($_FILES["userimage"]["tmp_name"])) {
  if (! in_array($file_extension, $allowed_image_extension)) {
   header('location:addnewprofile.php?upload=Upload Only Valid Image');       
  } 
  else {
      if (move_uploaded_file($_FILES["userimage"]["tmp_name"], $target_file)) {
      $stdimage = date('Y_m_d_H_i_s') . '_'. $_FILES["userimage"]["name"];    
      upload($stdimage);
      }
    }
}
else{
  $stdimage = "";
  upload($stdimage);
}
}
?>