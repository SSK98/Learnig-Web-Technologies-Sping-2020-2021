<?php
	
	
	if(isset($_POST['submit'])){
		$myName 	= $_POST['myName'];

			echo "$myName";
	}
	
		
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Name input</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>NAME</legend>
			Email: <input type="type" name="myName" value="<?php if(isset($_POST['myName'])){ echo $_POST['myName']; }?> ">  <br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>