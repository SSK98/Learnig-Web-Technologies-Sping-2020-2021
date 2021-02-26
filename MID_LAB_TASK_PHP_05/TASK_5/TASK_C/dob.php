<?php
	
	
	if(isset($_POST['submit'])){
		$day 	= $_POST['day'];
		$month 	= $_POST['month'];
		$year 	= $_POST['year'];

			echo "Day:" ."$day" ."Month:" . "$month" . "Year: " . "$year";
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
			<legend>Date of Birth</legend>

			<table>
				<tr>
					<td align="center">DD</td>
					<td align="center">MM</td>
					<td align="center">YY</td>
				</tr>
				<tr>
					<td><input type="text" width="10px" size="1" name="day" value="<?php if(isset($_POST['day'])){ echo $_POST['day']; }?> "></td>
					<td><input type="text" width="10px" size="1" name="month" value="<?php if(isset($_POST['month'])){ echo $_POST['month']; }?> "></td>
					<td><input type="text" width="10px" size="1" name="year" value="<?php if(isset($_POST['year'])){ echo $_POST['year']; }?>"></td>	
				</tr>
			</table>
			<input type="submit" name="submit" value="Submit">
	</fieldset>
</form>
</body>
</html>