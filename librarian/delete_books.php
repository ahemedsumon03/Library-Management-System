<?php
//include('dbcon.php');
$con=mysqli_connect('localhost','root','','librarymanagementsystem') or die(mysqli_error());
$id=$_GET['id'];
mysqli_query($con,"update book set status = 'Archive' where book_id='$id'")or die(mysql_error());
header('location:books.php');
?>