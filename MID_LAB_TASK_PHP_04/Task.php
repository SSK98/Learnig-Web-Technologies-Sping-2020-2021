<?php
	//TASK -1

	$length = 20;
	$width = 30;
	$area = $length * $width;
	$perimeter = 2 * ($length * $width);

	echo "Area = ". $area;
	echo "\r\n";
	echo "Perimeter = ". $perimeter;

	//TASK -2
	echo "\r\n";
	$length = 2500;
	$vat = ($length/100)*15;
	echo "VAT = ". $vat;

	//TASK -3
	echo "\r\n";

	function calc($val)
	{
		if ($val % 2 ==0) {return 0;}
		else {return 1;}
	}
	$number = 2130;
	$ans = calc($number);
	if($ans == 1){echo "ODD";} 
	else{echo "EVEN";}

	//TASK -4
	echo "\r\n";

	$num1 = 20;
	$num2 = 30;
	$num3 = 40;
	if($num1 >  $num2 && $num1 >  $num3 ){	
		echo "Number 1 is Largest";
	}

	if($num2 >  $num1 && $num2 >  $num3 ){	
		echo "Number 3 is Largest";
	}
	if($num3 >  $num2 && $num3 >  $num1 ){	
		echo "Number 3 is Largest";
	}

	//TASK -5
	echo "\r\n";

	for ($i=10; $i <=100 ; $i++) { 
		if($i % 2 ==1){
			echo $i;
			echo " |";
		}
	}

	//TASK -6
	echo "\r\n";

	$array = ['Dortmund','Munich','Berlin','Frankfurt'];
	$search ="Dortmund";
	$ans = "NOT FOUND";
	foreach ($array as $value) {
		if($search == $value ){
			$ans = "FOUND";
		}	
	}
	echo "$ans";

	//TASK -7
	//PATTERN 1
	echo "***********************";
	echo "\r\n";

	for ($i=1; $i<=3; $i++) { 
		
		for ($j=1; $j<=$i; $j++) {
				echo "*";
			}
			echo "\r\n";
	}


	
//PATTERN 2
	echo "***********************";
	echo "\r\n";
	$num=1;
	for ($i=3; $i>=0; $i--) { 
		$num=1;
		for ($j=1; $j<=$i; $j++) {
				echo "$num";
				$num++;
			}
			echo "\r\n";
	}
//PATTERN 3

	
	echo "***********************";
	echo "\r\n";

		$num="A";

	for ($i=1; $i<=3; $i++) { 
		
		for ($j=1; $j<=$i; $j++) {
				echo "$num";
				$num++;
			}
			echo "\r\n";
	}


	////////////TASK -8

	echo "\r\n";
	

?>