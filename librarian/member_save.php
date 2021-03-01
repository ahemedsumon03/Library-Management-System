<?php 
//include('dbcon.php');
$con=mysqli_connect('localhost','root','','librarymanagementsystem') or die(mysqli_error());
if (isset($_POST['submit'])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$type=$_POST['type'];
$year_level=$_POST['year_level'];
$memberid=$_POST['memberid'];



								
mysqli_query($con,"insert into member(member_id,firstname,lastname,gender,address,contact,type,year_level,status) values('$memberid','$firstname','$lastname','$gender','$address','$contact','$type','$year_level','')")or die(mysqli_error($con));
 
 
header('location:member.php');
}
?>	