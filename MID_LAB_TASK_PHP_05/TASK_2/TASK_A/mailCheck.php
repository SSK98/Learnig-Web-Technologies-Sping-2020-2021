
<?php
	
	
	if(isset($_POST['submit']))
	{

		$mail 	= $_POST['mail'];

		if($mail == ""){
			echo "null submission";
		}else{
			echo "$mail";
		}
	}else{
		echo "Invalid request...";
	}
?>