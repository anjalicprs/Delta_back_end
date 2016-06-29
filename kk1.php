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
		    echo $user;
		   echo " you are successfully loged in";
			 echo "<br> NAME : ".$row["firstname"]." ".$row["lastname"]."</br>";
			  echo "<br> Password : ".$row["password"]."</br>";
			   echo "<br> E-Mail : ".$row["email"]."</br>";
			    echo "<br> MOBILE : ".$row["mob"]."</br>";
				 echo ' <a href="edit2.php"><button style="background-color:green;color:white; height:50px; width:90px;">EDIT RESPONSE</button></a>';
	 }else {
         echo "Sorry the e-mail that u gave is not registered";
      }
	 
?>
	