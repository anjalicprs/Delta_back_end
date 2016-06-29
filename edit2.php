<?php
require('config.php');
if(isset($_POST['submit'])){
	
}else{
	$form=<<<EOT
	<form action="edit.php" method="POST" >
<p>Enter the new firstname
<input type="text" name="user" required/>
</p>
<p>Enter The new lastname:
<input type="text" name="last" required/>
</p>
<p> Enter your Mobile No.:
<input type="number" name="phone" required/>
</p>
<p>
<input type="submit" name="submit" value="Edit information"/>
</p>
</form>
EOT;
echo $form;}

?>