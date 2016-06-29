<?php
require('config.php');
if(isset($_POST['submit'])){
		
}else{
	$form=<<<EOT
	<form action="kk1.php" method="POST" >

<p> Enter your E-mail:
<input type="text" name="mail" required/>
</p>
<input type="submit" name="submit" value="LOGIN"/>
</p>
</form>
EOT;
echo $form;
}
?>