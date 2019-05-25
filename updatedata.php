<?php
$message="";
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
$id = $_POST['id'];
$currentstdimage = $_POST['existimage'];
$imgdel = "stdimage/".$currentstdimage;
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
if (file_exists($_FILES["userimage"]["tmp_name"])) {
  if (! in_array($file_extension, $allowed_image_extension)) {
   header('location:edit.php?upload=Upload Only Valid Image');       
  } 
  else {
      if (move_uploaded_file($_FILES["userimage"]["tmp_name"], $target_file)) {
      $stdimage = date('Y_m_d_H_i_s') . '_'. $_FILES["userimage"]["name"];    
      $sql = "UPDATE studentinfo SET stdimage='$stdimage', firstname='$firstname', lastname='$lastname', dob='$dob', gender='$gender', grade='$grade', peradd='$peradd', tempadd='$tempadd', fathername='$fathername', fatherphone='$fatherphone', fatheroccupation='$fatheroccupation', mothername='$mothername', motherphone='$motherphone', motheroccupation='$motheroccupation', academicremarks='$academicremarks', sports='$sports', competitions='$competitions', rewards='$rewards', punishments='$punishments' WHERE id='$id'";
      $con = mysqli_connect("localhost","root","","sims");
      if (mysqli_query($con, $sql)) {
        if (file_exists($imgdel)) {
            unlink($imgdel);
           }
           header('location:edit.php?id='.$id.'&update=Data and Image Successfully Updated');
         echo "image deleted too";
        } 
       else {
        header('location:edit.php?id='.$id.'&update=Error in Updating Data');
          echo "data not updated";
        }
      }
    }
}
else{
     $sql = "UPDATE studentinfo SET firstname='$firstname', lastname='$lastname', dob='$dob', gender='$gender', grade='$grade', peradd='$peradd', tempadd='$tempadd', fathername='$fathername', fatherphone='$fatherphone', fatheroccupation='$fatheroccupation', mothername='$mothername', motherphone='$motherphone', motheroccupation='$motheroccupation', academicremarks='$academicremarks', sports='$sports', competitions='$competitions', rewards='$rewards', punishments='$punishments' WHERE id='$id'";
      $con = mysqli_connect("localhost","root","","sims");
      if (mysqli_query($con, $sql)) {
        header('location:edit.php?id='.$id.'&update=Data Successfully Updated');
         echo "data updated without image";
        } 
       else {
        header('location:edit.php?id='.$id.'&update=Error in Updating Data');
         echo "data not updated";
        }
}
}
?>