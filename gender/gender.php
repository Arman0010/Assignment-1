<?php
	
	if(isset($_POST['gender'])){
		echo $_POST['gender'];
	}
	
?>

<form action="#" method="POST">
	<fieldset>
		<legend>Gender</legend>
		<input type="radio" name="gender" value="male" required> Male
		<input type="radio" name="gender" value="female" required> Female
		<input type="radio" name="gender" value="other" required> Other<br>
		<input type="submit" name="submit" value="Submit" >
		<hr/>
	</fieldset>
</form>