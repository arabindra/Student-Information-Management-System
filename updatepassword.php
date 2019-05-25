<?php
include("connect.php");
include("session.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $newpassword=md5(mysqli_real_escape_string($con,$_POST['newpassword']));
    $confirmpassword=md5(mysqli_real_escape_string($con,$_POST['confirmpassword']));
    if ($newpassword == $confirmpassword) {
        $update = mysqli_query($con,"UPDATE admin SET password='$newpassword' WHERE username='$user_check'");
        if ($update) {
            header("location:logout.php");
        }
        else{
            header("Location: ".$_SERVER['HTTP_REFERER']);
        }
    }
    else{
            header("Location: ".$_SERVER['HTTP_REFERER']);
    }
}
else{
            header("Location: ".$_SERVER['HTTP_REFERER']);
}
?>