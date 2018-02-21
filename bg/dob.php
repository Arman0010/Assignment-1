<?php
	
	if(isset($_POST['bg'])){
		echo $_POST['bg'];
	}
?>

<form action="#" method="post">
	<fieldset>
		<legend>Blood Group</legend>
		<select name="bg">
			<option value="O+" required>O+</option>
			<option value="O-" required>O-</option>
			<option value="A+" required>A+</option>
			<option value="A-" required>A-</option>
			<option value="B+" required>B+</option>
			<option value="B-" required>B-</option>
			<option value="AB+" required>AB+</option>
			<option value="AB-" required>AB-</option>
		</select>
		<br/>
		<input type="submit" name="submit" value="Submit">
	</fieldset>
</form>

