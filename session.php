<?php
include('connect.php');
session_start();
if(!isset($_SESSION['username'])){
header("location:login.php");
}
$user = $_SESSION['username'];
$query = mysqli_query($con,"select username from admin where username = '$user' ");
$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
if(!is_array($row)) {
header("location:login.php");
} 
?>