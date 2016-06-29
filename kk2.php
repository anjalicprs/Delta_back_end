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
		   echo '<p style="color:blue;text-align:center;font-size:45;height:400px;width:100%;background-color:#c2dfff;">Sorry the password that you entered already exist</p> ';
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
	echo'<body bgcolor="#c2dfff"><br/>';
		   echo '<div style="color:green;background-color:#151b8d;width:101%;height:20%;margin-top:-28px;margin-left:-9px;"> 
		    <form method="post" action="kk1.php">
				<input style="color:green;height:40px;font-size:20;margin-top:5px;margin-left:20px;border-radius:5px;" type="text" 
				name="mail" placeholder="Search friends by e-mail"/>
				<input type="submit" value="Search" style="background-color:green;color:white;"/>
			</form>
		   <p><h1 style="color:white;margin-top:-48px;margin-left:350px;font-size:45;"><b>welcome to facelook</b></h1></p></div>
		   <img src="heart3.jpg" height="100px" width="100px"><h1 style="color:green;margin-left:500px;font-size:45;margin-top:-100px;">Cover photo</h1> 
		   <br/>';
		   echo '<h1 style="color:green;text-align:center;">You are Succesfully logged in</h1>';
		   echo '<h1 style="color:green;text-align:center;">To Enjoy it please log in</h1>';
	echo ' <a href="view.php"><button style="background-color:green;color:white; height:50px; width:90px;">LOGIN</button></a>';
	$stmt->close();
	$conn->close();
	   }
	?>