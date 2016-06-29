<?php
    $servername="localhost";
	$username="root";
	$password='';
	$dbname="form";
	$conn=new mysqli($servername,$username,$password,$dbname);
	
	$firstname1=mysqli_real_escape_string($conn,$_POST['user']);
		$email1=mysqli_real_escape_string($conn,$_POST['mail']);
		$mob1=mysqli_real_escape_string($conn,$_POST['phone']);
		$pass1=mysqli_real_escape_string($conn,$_POST['pass1']);
		$image1=mysqli_real_escape_string($conn,$_POST['image']);
		$lastname1=mysqli_real_escape_string($conn,$_POST['last']);
		$pass1=md5($pass1);
	$sql = "SELECT id FROM signup WHERE email ='$email1'";
  $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  $count = mysqli_num_rows($result);
	  $sql2 = "SELECT password FROM signup WHERE email ='$email1'";
  $result2 = mysqli_query($conn,$sql2);
      $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
	  $count2 = mysqli_num_rows($result2);
	   if(($count > 0)) 
	   {
		   echo "Sorry the e-mail that you entered is already registered please enter another one";
		   echo '<a href="login2.php"><button style="background-color:green;color:white; height:50px; width:90px;">Go Back</button></a>';
	   }
	   else if($count2>0){
	         echo "Sorry the password that you entered is already registered please enter another one";
		   echo '<a href="login2.php"><button style="background-color:green;color:white; height:50px; width:90px;">Go Back</button></a>';
	   }
	   else {
	$stmt=$conn->prepare("INSERT INTO signup(
	firstname,lastname,email,password,mob,image)
	VALUES (?,?,?,?,?,?)");
	$stmt->bind_param("ssssib",
	$firstname,$lastname,$email,$password,$mob,$image);
	$firstname=$firstname1;
	$lastname=$lastname1;
	$email=$email1;
	$password=$pass1;
	$mob=$mob1;
	$image=$image1;
	$stmt->execute();
	echo "New records added";
	
	echo ' <a href="view.php"><button style="background-color:green;color:white; height:50px; width:90px;">LOGIN</button></a>';
	$stmt->close();
	$conn->close();
	   }
	?>