<?php
	
	
	if(isset($_POST['submit']))
	{

		$gender = $_POST['gender'];
		
			echo "$gender";
		
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Gender input</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>Gender</legend>

			<input type="radio" name="gender" value="Male"> Male 			
			<input type="radio" name="gender" value="Female"> Female 			
			<input type="radio" name="gender" value="Other"> Other 			
			<br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>