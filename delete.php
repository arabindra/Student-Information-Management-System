<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $con = mysqli_connect("localhost","root","","sims");
    $del = "DELETE FROM studentinfo WHERE id='$id'";
    $othersql = "select stdimage from studentinfo where id='$id'";
    $result=mysqli_query($con,$othersql);
    while($row = mysqli_fetch_array($result)){
        if (file_exists("stdimage/".$row['stdimage'])) {
            unlink("stdimage/".$row['stdimage']);
            mysqli_query($con,$del);
            if (strpos($_SERVER['HTTP_REFERER'], 'edit.php') !== false) {
                header("Location: dashboard.php");
            }
            else{
                header("Location: ".$_SERVER['HTTP_REFERER']);
            }
        }
        else{
            mysqli_query($con,$del);
            if (strpos($_SERVER['HTTP_REFERER'], 'edit.php') !== false) {
                header("Location: dashboard.php");
            }
            else{
                header("Location: ".$_SERVER['HTTP_REFERER']);
            }
        }
    }

}
?>