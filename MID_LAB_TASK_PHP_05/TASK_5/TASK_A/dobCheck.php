<?php
	
	
	if(isset($_POST['submit']))
	{

		$day 	= $_POST['day'];
		$month 	= $_POST['month'];
		$year 	= $_POST['year'];

		if($day == "" || $month == "" || $year == ""){
			echo "null submission";
		}else{
			echo "Day:" ."$day" ."Month:" . "$month" . "Year: " . "$year";
		}
	}else{
		echo "Invalid request...";
	}
?>