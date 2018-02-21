

<form action="#" method="POST">
	<fieldset  required>
		<legend>Degree</legend>
		<input type="checkbox" name="degree" value="SSC"> SSC
		<input type="checkbox" name="degree" value="HSC"> HSC
		<input type="checkbox" name="degree" value="BSc"> BSc
		<input type="checkbox" name="degree" value="MSc"> MSc<br>
		<hr/>
		<input type="submit" name="submit" value="Submit" >
		
	</fieldset>
</form>

<?php
	
	if(isset($_POST['degree']) or die("select one")){
		echo $_POST['degree'];
	}
	
?>