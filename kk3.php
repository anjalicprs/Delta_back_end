<?php
session_start();
$servername="localhost";
	$username="root";
	$password='';
	$dbname="form";
	$conn=new mysqli($servername,$username,$password,$dbname);
$email1=mysqli_real_escape_string($conn,$_POST['mail']);
$_SESSION['emailid'] = "$email1";
 $sql = "SELECT * FROM signup WHERE email ='$email1'";
  $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  $user=$row['firstname'];
	  $count = mysqli_num_rows($result);
	   
	   if($count > 0) 
	   {
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
		   echo'<h1>Hello  ';
		   echo ' your friend ';
		   echo $user;
		   echo' is present on this site</h1>';
		   echo '<h1 style="color:blue;">Your friend details are given below  </h1>';
			 echo "<br> NAME : ".$row["firstname"]." ".$row["lastname"]."</br>";
			   echo "<br> E-Mail : ".$row["email"]."</br>";
			    echo "<br> MOBILE : ".$row["mob"]."</br>";
				 echo ' <a href="home.html"><button style="background-color:green;color:white; height:50px; width:90px;border-radius:7px;">Go to home page
				 </button></a>';
	 }else {
         echo "Sorry the e-mail that u gave is not registered";
      }
	 

?>