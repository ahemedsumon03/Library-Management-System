<?php
//include('dbcon.php');
$con=mysqli_connect('localhost','root','','librarymanagementsystem') or die(mysqli_error());
$id=$_GET['id'];

mysqli_query($con,"delete from users where user_id='$id'") or die(mysqli_error($con));

header('location:users.php');
?>