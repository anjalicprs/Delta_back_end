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
<form action="kk1.php" method="POST" >
<p id="p"> Enter your E-mail:
<input type="text" name="mail" id="input" required/>
</p>
<input type="submit" name="submit" value="LOGIN" id="input2"/>
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
</style>
</body>
</html>