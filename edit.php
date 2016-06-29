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
  echo'<body bgcolor="#c2dfff"><br/>';
		   echo '<div style="color:green;background-color:#151b8d;width:101%;height:20%;margin-top:-28px;margin-left:-9px;"> 
		    <form method="post" action="kk1.php">
				<input style="color:green;height:40px;font-size:20;margin-top:5px;margin-left:20px;border-radius:5px;" type="text" 
				name="mail" placeholder="Search friends by e-mail"/>
				<input type="submit" value="Search" style="background-color:green;color:white;"/>
			</form>
		   <p><h1 style="color:white;margin-top:-48px;margin-left:350px;font-size:45;"><b>welcome to facelook</b></h1></p></div>
		   <img src="heart3.jpg" height="100px" width="100px"><h1 style="color:green;margin-left:500px;font-size:45;margin-top:-100px;">Cover photo</h1> <br/>';
		   echo '<img src="fun.jpg" height="300px" width="500px" style="margin-left:800px;margin-top:-100px;">';
  echo '<h1 style="color:green;text-align:center;">UPDATED WITH NEW CHANGES</h1>';
  echo '<a href="home.html"><button style="background-color:green;color:white; height:50px; width:90px;border-radius:7px;">Log Out</button></a>';
  mysqli_close($conn);
?>