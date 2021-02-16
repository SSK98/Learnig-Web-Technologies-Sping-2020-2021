<?php
	
	
	if(isset($_POST['submit'])){
		$mail 	= $_POST['mail'];

			echo "$mail";
	}
	
		
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Email input</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>Email</legend>
			Email: <input type="Email" name="mail" value="<?php if(isset($_POST['mail'])){ echo $_POST['mail']; }?> ">  <br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>