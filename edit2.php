<html>
<head>
<title>facelook Edit Response</title>
</head>
<body bgcolor="#c2dfff">
<div id="header">
<form method="post" action="kk1.php">
<input id="search" type="text" name="mail" placeholder="Search friends by e-mail"/>
<input id="search1" type="submit" value="Search" style="background-color:green;color:white;"/>
</form>
<p><h1 id="view"><b>welcome to facelook</b></h1></p>
</div>
<div>
<img src="thumps2.png" id="blank">
<img src="heart2.jpg" id="ww">
<form action="edit.php" method="POST" id="form">
<h1 id="p1">Edit Your Prev Response</h1>
<p id="p">Enter the new firstname
<input type="text" name="user" id="input" required />
</p>
<p id="p">Enter The new lastname:
<input type="text" name="last" id="input" required/>
</p>
<p id="p"> Enter your new Mobile No.:
<input type="number" name="phone" id="input" required/>
</p>
<p>
By clicking Edit-Response, you agree to </p><p>change your previous record</p>
<p>
<input type="submit" name="submit" id="input2" value="Edit-Response"/>
</p>
</form>
<style>
#header{
   color:green;
   background-color:#151b8d;
   width:100%;
   height:20%;
   margin-top:-8px;
   margin-left:-7px;
}
#input2{
 background-color:#437c17;
 font-size:35;
 border-radius:7px;
}
#p1{
font-size:45;
}
#p{
 color:#151b8d;
 font-size:25;
}
#input{
   color:green;
   height:40px;
   font-size:20;
   border-radius:10px;
}
#search{
   color:green;
   height:40px;
   font-size:20;
   margin-top:5px;
   margin-left:20px;
   border-radius:5px;
}
#view{
 color:white;
 margin-top:-48px;
 font-family:italic;
 margin-left:350px;
 font-size:45;
}
#blank{
   width:30%;
   height:110%;
   margin-top:5px;
    margin-left:1px;
}
#ww{
  width:20%;
  height:20%;
  margin-top:-140px;
  margin-left:-272px;
}
#form{
   margin-top:-690px;
   margin-left:750px;
}
</style>
</body>
</html>