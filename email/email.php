<?php
	
	if(isset($_POST['email'])){
		echo $_POST['email'];
	}
	
?>

<form action="#" method="POST">
	<fieldset>
		<legend>Email</legend>
		<input type="text" name="email" value="" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">  i<br/><br/>
		<input type="submit" name="submit" value="Submit" >
		<hr/>
	</fieldset>
</form>