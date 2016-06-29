<?php
require('config.php');
$pass1=$_POST['pass1'];
	$pass2=$_POST['pass'];
	$email=$_POST['mail'];
	$mob=$_POST['phone'];
	$username=$_POST['user'];
	if($pass1===$pass2){
		//All good
		$username=mysqli_real_escape_string($conn,$_POST['user']);
		$email=mysqli_real_escape_string($conn,$_POST['mail']);
		$mob=mysqli_real_escape_string($conn,$_POST['phone']);
		$pass1=mysqli_real_escape_string($conn,$_POST['pass1']);
		$pass2=mysqli_real_escape_string($conn,$_POST['pass']);
	}
	else{
		echo "sorry your password do not match.</br>";
		exit();
	}
	$stmt=$conn->prepare("INSERT INTO users(name
	,password,email,mobile)
	VALUES (?,?,?,?)");
	$stmt->bind_param("sss",
	$name,$password,$email,$mobile);
	$name='$username';
	$password='$pass1';
	$email='$email';
	$mobile='$mob';
	$stmt->execute();
	echo "New records added";
	$stmt->close();
?>