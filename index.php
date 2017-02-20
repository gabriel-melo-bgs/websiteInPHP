<?php

	echo "<h1>"."What's up, galera???"."</h1>";
	for($i = 0; $i<=10; $i++){
		if($i == 0)
		echo "echoing for the 1st time<br>";
		else if($i == 1)
		echo "echoing for the 2nd time<br>";
		else if($i == 2)
		echo "echoing for the 3rd time<br>";
		else 
		echo "echoing for the ".($i+1)."th time<br>";
	//whithout parentheses, concatenation won't work.($i+1).
		
	}
	
?>