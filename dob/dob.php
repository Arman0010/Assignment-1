<?php
	
	if(isset($_POST['dd'])){
		echo $_POST['dd'];
		echo "/";
		echo $_POST['mm'];
		echo "/";
		echo $_POST['yy'];
	}
?>

<form action="#" method="post">
	<fieldset>
		<legend>DOB</legend>
		
		dd
		<input type="text" name="dd" value="" required pattern="[01-29]{1,2}$" >
		mm
		<input type="text" name="mm" value="" required pattern="[1-12]{1,2}$" >
		yy
		<input type="text" name="yy" value="" required pattern="[1970-1998]{4,4}$" >
		<br/>
		
		<input type="submit" name="submit" value="Submit">
	</fieldset>
</form>


