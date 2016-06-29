<?php
session_start();
 $servername="localhost";
	$username="root";
	$password='';
	$dbname="form";
	$conn=new mysqli($servername,$username,$password,$dbname);
	$firstname1=mysqli_real_escape_string($conn,$_POST['user']);
	$lastname1=mysqli_real_escape_string($conn,$_POST['last']);
	$mob1=mysqli_real_escape_string($conn,$_POST['phone']);
	$email2= $_SESSION['emailid'];
	$email1=mysqli_real_escape_string($conn,$_SESSION['emailid']);
$sql2="UPDATE signup SET firstname='$firstname1',lastname='$lastname1',mob='$mob1' WHERE email='$email1'";
  $result = mysqli_query($conn,$sql2);
  if(!$result)
  {
	  die('could not update data : '.mysqli_error($conn));
  }
  echo '<h1 style="color:green;text-align:center;">UPDATED WITH NEW CHANGES</h1>';
  mysqli_close($conn);
?>